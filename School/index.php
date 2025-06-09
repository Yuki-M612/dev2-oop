<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Student Form</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body class="bg-white">
  <div class="container mt-5 mx-auto" style="max-width: 400px;">
    <!-- タイトル -->
    <h1 class="text-center mb-4">REGISTRATION</h1>

    <form method="POST" action="">
      <!-- Student's Name -->
      <div class="mb-3">
        <label for="studentName" class="form-label">Student's Name</label>
        <input type="text" class="form-control" id="studentName" name="studentName"/>
      </div>

      <!-- Year Level -->
      <div class="mb-3">
        <label for="yearLevel" class="form-label">Year Level</label>
        <input type="text" class="form-control" id="yearLevel" placeholder="Choose your year level" name="yearLevel"/>
      </div>

      <!-- Total Units -->
      <div class="mb-3">
        <label for="totalUnits" class="form-label">Total Units</label>
        <input type="number" class="form-control" id="totalUnits" placeholder="Maximum of 23" name="totalUnits" />
      </div>

      <!-- Lab Option 横並び & 中央揃え -->
      <div class="mb-3 text-center">
        <div class="d-inline-flex gap-3 justify-content-center">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="labOption" id="withLab" value="withLab" />
            <label class="form-check-label" for="withLab">With Lab</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="labOption" id="withoutLab" value="withoutLab" />
            <label class="form-check-label" for="withoutLab">Without Lab</label>
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-dark w-100" name="btn_submit">Submit</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include_once "School.php"; // Prevents double declaration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['studentName'] ?? '';
    $yearLevel = (int)($_POST['yearLevel'] ?? 0);
    $totalUnits = (int)($_POST['totalUnits'] ?? 0);
    $labOption = $_POST['labOption'] ?? 'withoutLab';

    $student = new School;
    $student->setValues($name, $yearLevel, $totalUnits, $labOption);

    echo "Student's Name: " . $student->getName() . "<br>";
    echo "Year Level: " . $student->getYearLevel() . "<br>";
    echo "Total Units: " . $student->getTotalUnits() . "<br>";
    echo "Lab Option: " . $student->getLabOption() . "<br>";
    echo "Total Fee: " . number_format($student->calculateFee(), 2) . " PHP";
}
?>
