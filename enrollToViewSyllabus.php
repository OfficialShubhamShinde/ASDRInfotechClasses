<?php
include '_dbConnect.php';
?>

<?php
session_start();

$user_type = $_SESSION['user_type'] ?? '';
$user_id = $_SESSION['user_id'] ?? '';

?>

<?php
$courseId = $_GET['courseId'];
// echo $courseId;
?>

<?php
$selectSylType = "select * from courses where course_id= $courseId";
$querySelectSylType = mysqli_query($conn, $selectSylType);
$fetchRowSelectSylType = mysqli_fetch_assoc($querySelectSylType);
$fetchCourseType = $fetchRowSelectSylType['syllabus_type'];
if ($fetchCourseType == 'Full Stack Web Development') {
    echo '
    <script>
        window.location.href = "webfullstack";
    </script>';
} elseif ($fetchCourseType == 'Full Stack Java Development') {
    echo '
    <script>
        window.location.href = "javafullstack";
    </script>
    
    ';
} elseif ($fetchCourseType == 'Frontend Development') {
    echo '
    <script>
        window.location.href = "frontend";
    </script>
    
    ';
} elseif ($fetchCourseType == 'Java') {
    echo '
    <script>
        window.location.href = "java";
    </script>
    
    ';
} elseif ($fetchCourseType == 'Python') {
    echo '
    <script>
        window.location.href = "python";
    </script>
    
    ';
} elseif ($fetchCourseType == 'PHP') {
    echo '
    <script>
        window.location.href = "phpcourse";
    </script>
    ';
} elseif ($fetchCourseType == '.Net C#') {
    echo '
    <script>
        window.location.href = "dotnet";
    </script>
    ';
} elseif ($fetchCourseType == 'c/c++') {
    echo '
    <script>
        window.location.href = "cpp";
    </script>
    ';
} elseif ($fetchCourseType == 'Database') {
    echo '
    <script>
        window.location.href = "databaselanguage";
    </script>
    ';
} elseif ($fetchCourseType == 'Manual/Automation Testing') {
    echo '
    <script>
        window.location.href = "softwaretesting";
    </script>
    ';
} elseif ($fetchCourseType == 'Digital Marketing') {
    echo '
    <script>
        window.location.href = "digitalmarketing";
    </script>
    ';
} elseif ($fetchCourseType == 'Sales and Marketing') {
    echo '
    <script>
        window.location.href = "salesandmarketing";
    </script>
    ';
} elseif ($fetchCourseType == 'ERP Foundation') {
    echo '
    <script>
        window.location.href = "erp";
    </script>
    ';
} elseif ($fetchCourseType == 'ERP(SAP) Advance') {
    echo '
    <script>
        window.location.href = "erpsap";
    </script>
    ';
} elseif ($fetchCourseType == 'IT Bridge Program') {
    echo '
    <script>
        window.location.href = "itbridge";
    </script>
    ';
} elseif ($fetchCourseType == 'IT Entry Level Program') {
    echo '
    <script>
        window.location.href = "itentrylevel";
    </script>
    ';
} elseif ($fetchCourseType == 'Softskills') {
    echo '
    <script>
        window.location.href = "skills";
    </script>
    ';
} elseif ($fetchCourseType == 'Data Science') {
    echo '
    <script>
        window.location.href = "datascience";
    </script>
    ';
} elseif ($fetchCourseType == 'Machine Learning') {
    echo '
    <script>
        window.location.href = "machinelearning";
    </script>
    ';
} else {
    echo '
    <script>
        window.location.href = "index";
    </script>
    ';
}
?>