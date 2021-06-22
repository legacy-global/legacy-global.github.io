<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title id="page-title">Legacy Forms</title>
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Harmony Durfee">
  <meta name="description" content="Form submissions for Legacy Global Foundation.">
  <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
  <meta name="viewport" content="width=device-width">
</head>

<body>
  <form action="submit">
    <label for="formType">Choose a Form: </label>
    <select name="formType" id="formType">
      <option value="disbursements">Disbursements</option>
      <option value="duediligence">Due Diligence</option>
      <option value="entities">Entities</option>
      <option value="funds_programs">Funds & Programs</option>
      <option value="documents">Documents</option>
    </select>
    <br>
    <?php echo "../templates/all-questions.php" ?>
    <input type="submit" value="Submit">
  </form>
</body>

</html>