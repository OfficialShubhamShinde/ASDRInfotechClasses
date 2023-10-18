<?php 
    include '../_dbConnect.php';
?>

<?php
// Process the form submission
if (isset($_POST['add_content'])) {
    $course_id = $_POST['course_id'];
    $chapter_name = $_POST['chapter_name'];
    $point_number = $_POST['point_number'];
    $point_text = $_POST['point_text'];
    $point_material = $_POST['subpoint_material[]'];

    // Insert the course if it doesn't exist
    $courseExists = false;
    $query = "SELECT course_id FROM courses WHERE course_id = '$course_id'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $courseExists = true;
    } else {
        $insertCourseQuery = "INSERT INTO courses (course_id) VALUES ('$course_id')";
        mysqli_query($conn, $insertCourseQuery);
    }

    // Insert the chapter if it doesn't exist
    $chapter_id = '';
    $query = "SELECT chapter_id FROM chapters WHERE chapter_name = '$chapter_name' AND course_id = '$course_id'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $chapter_id = $row['chapter_id'];
    } else {
        $insertChapterQuery = "INSERT INTO chapters (course_id, chapter_name) VALUES ('$course_id', '$chapter_name')";
        mysqli_query($conn, $insertChapterQuery);
        $chapter_id = mysqli_insert_id($conn);
    }

    // Insert the point
    $insertPointQuery = "INSERT INTO points (chapter_id, point_number, point_text) VALUES ('$chapter_id', '$point_number', '$point_text')";
    mysqli_query($conn, $insertPointQuery);
    $point_id = mysqli_insert_id($conn);


    // Handle uploaded materials
    $materialNames = $_FILES['material']['name'];
    $materialTmpNames = $_FILES['material']['tmp_name'];

    if (is_array($materialNames)) {
        for ($i = 0; $i < count($materialNames); $i++) {
            $materialName = mysqli_real_escape_string($conn, $materialNames[$i]);
            $materialTmpName = $materialTmpNames[$i];

            $materialData = file_get_contents($materialTmpName); // Read the file contents

            // Insert the material
            $insertMaterialQuery = "INSERT INTO materials (point_id, material_type, material_data) VALUES ('$point_id', 'file', ?)";
            $stmt = mysqli_prepare($conn, $insertMaterialQuery);
            mysqli_stmt_bind_param($stmt, 's', $materialData);
            mysqli_stmt_execute($stmt);
        }
    }

    // Handle subpoints
    $subpointNumbers = $_POST['subpoint_number'];
    $subpointTexts = $_POST['subpoint_text'];
    $subpointMaterialTypes = $_FILES['subpoint_material']['type'];
    $subpointMaterialNames = $_FILES['subpoint_material']['name'];
    $subpointMaterialTmpNames = $_FILES['subpoint_material']['tmp_name'];

    if (is_array($subpointNumbers)) {
      for ($i = 0; $i < count($subpointNumbers); $i++) {
      $subpointNumber = mysqli_real_escape_string($conn, $subpointNumbers[$i]);
      $subpointText = mysqli_real_escape_string($conn, $subpointTexts[$i]);
      $subpointMaterialType = mysqli_real_escape_string($conn, $subpointMaterialTypes[$i]);
      $subpointMaterialName = mysqli_real_escape_string($conn, $subpointMaterialNames[$i]);
      $subpointMaterialTmpName = $subpointMaterialTmpNames[$i];       
      
      // Handle the subpoint material file (e.g., move to a specific directory, store in database blob, etc.)
      // Implement the appropriate logic based on your chosen storage method

      $subpointMaterialData = file_get_contents($subpointMaterialTmpName); // Read the file contents

      // Insert the subpoint
      $insertSubpointQuery = "INSERT INTO subpoints (point_id, subpoint_number, subpoint_text, subpoint_material_type, subpoint_material_data) 
                            VALUES ('$point_id', '$subpointNumber', '$subpointText', '$subpointMaterialType', ?)";
      $stmt = mysqli_prepare($conn, $insertSubpointQuery);
      mysqli_stmt_bind_param($stmt, 's', $subpointMaterialData);
      mysqli_stmt_execute($stmt);
  }
}

// Redirect or display success message
// Implement the appropriate logic based on your application's requirements

}
?>