<!-- <?php //login 
$htmlContent = '<p align="justify" style="orphans: 0; widows: 0; margin-left: 0.39cm;
margin-bottom: 0cm; border: none; padding: 0cm"><b>PARTY</b>2NAME<i>, </i>a
company incorporated under the laws of ROC2LAW having its Registered Office at
P1OFFICEADD. which expression, shall unless it be repugnant to the context or
meaning thereof, mean and include its successors and assigns (hereinafter referred
to as ‘‘ Service Provider’) of the ONE PART</p>';
$search = array('PARTY2NAME', 'P1OFFICEADD.');
$replace = array('Abc india pvt. Ltd.', 'Mount Road,chennai-60014.');

$updatedContent = str_replace($search, $replace, $htmlContent);
echo $updatedContent;
?>
 -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Content Find & Replace</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">HTML Content Find & Replace</h2>
        <form method="post" action="process.php">
            <div class="form-group">
                <label for="htmlContent">HTML Content:</label>
                <textarea class="form-control" id="htmlContent" name="htmlContent" rows="6" required></textarea>
            </div>
            <div class="form-group">
                <label for="search">Find:</label>
                <input type="text" class="form-control" id="search" name="search" required>
            </div>
            <div class="form-group">
                <label for="replace">Replace with:</label>
                <input type="text" class="form-control" id="replace" name="replace" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

