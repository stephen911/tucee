
<?php
 include 'functions.php';
 include 'yolkpay.php';
 $yolk =  new YolkPay();

 checker();
 $user = users();
//  var_dump($_SESSION['id']);

if (isset($_GET['ref'])) {
    extract($_GET);

    $uid = $_SESSION['id'];

    payment($uid, $ref, $amount);
}
?>

<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Certification</title>

        <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">


         <meta name="robots"
              content="noindex">
        <script src="https://unpkg.com/pdf-lib@1.4.0"></script>
        <script src="https://unpkg.com/downloadjs@1.4.7"></script>

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">

    </head>

    <body class=" layout-fluid">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.php -->
        </div>

        <!-- Header Layout -->
        <?php include 'navbar.php'; ?>
            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid page__container p-0">
                            <div class="row m-0">
                                <div class="col-lg container-fluid page__container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                        <li class="breadcrumb-item active">Certification</li>
                                    </ol>

                                    <h1 class="h2">Certification</h1>

                                    <?php
                                    if ($user['paystatus'] == '') {
                                        echo '<div class="card border-left-3 border-left-danger card-2by1">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    No Payment has been made yet
                                                    
                                                </div>
                                                <div class="media-right">
                                                    ' . $yolk->handler() . '
                                                    ' . $yolk->payscript($user['title'], $user['name'], $user['email'], $user['contact'], 70, $ref = '') . '
                                                    ' . $yolk->pay("Pay Now") . '
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                    } else {
                                        echo '<div class="card border-left-3 border-left-danger card-2by1">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    Download your Certificate
                                                    <!-- <strong class="text-danger">$25.00</strong> <a href="#">#8331</a> -->
                                                </div>
                                                <div class="media-right">
                                                    <a href="ntcreg.php" 
                                                       class="btn btn-success float-right">Update Details</a>
                                                </div>
                                                <div class="media-right">
                                                    <a href="#" id="download-btn"
                                                       class="btn btn-success float-right">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <canvas id="canvas" style="border:1px solid #d3d3d3;"></canvas>

                                    ';

                                    }

                                    ?>

                                   

                                    

                                    <!-- Pagination -->
                                    <!-- <div class="container"> -->
       
        <!-- <label>
            Name:
            <input id="name" type='text'>
        </label> -->
        <!-- <a href="#" id="download-btn" download>Download</a> -->
        
            
            <input id="name" type='hidden' value="<?php echo $user['title'].' '.$user['name']; ?>">
            <input id="district" type='hidden' value="<?php echo $user['district']; ?>">
            <input id="dateadded" type='hidden' value="<?php echo $user['tdate']; ?>">

            <!-- <a href="javascript:genPDF()">Download PDF</a> -->

            <!-- <button onclick="modifyPdf()">Modify PDF</button> -->


       
    <!-- </div> -->
                                    

                                </div>
                                
                            </div>
                        </div>

                    </div>

                    <?php include 'sidebar.php'; ?>


                <!-- App Settings FAB -->
                

            </div>
        </div>

        <script>

function genPDF() {
	
	var doc = new jsPDF();
	
	doc.text(20,20,'TEST Message!!');
	doc.addPage();
	doc.text(20,20,'TEST Page 2!');
	doc.save('Test.pdf');
	
}



        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/
jspdf/1.3.2/jspdf.debug.js"></script>



        <script>
    const { degrees, PDFDocument, rgb, StandardFonts } = PDFLib

    async function modifyPdf() {
      // Fetch an existing PDF document
      const url = 'assets/images/CERT.pdf'
  		const existingPdfBytes = await fetch(url).then(res => res.arrayBuffer())

      // Load a PDFDocument from the existing PDF bytes
      const pdfDoc = await PDFDocument.load(existingPdfBytes)

      // Embed the Helvetica font
      const helveticaFont = await pdfDoc.embedFont(StandardFonts.Helvetica)

      // Get the first page of the document
      const pages = pdfDoc.getPages()
      const firstPage = pages[0]

      // Get the width and height of the first page
      const { width, height } = firstPage.getSize()

      // Draw a string of text diagonally across the first page
        drawText('This text was added with JavaScript!', {
        x: 250,
        y: 250,
        size: 50,
        font: helveticaFont,
        color: rgb(0, 1, 1),
        rotate: degrees(-45),
      })

      // Serialize the PDFDocument to bytes (a Uint8Array)
      const pdfBytes = await pdfDoc.save()

			// Trigger the browser to download the PDF document
      download(pdfBytes, "pdf-lib_modification_example.pdf", "application/pdf");
    }
  </script>

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/dom-factory.js"></script>
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/cert.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

        <!-- List.js -->
        <script src="assets/vendor/list.min.js"></script>
        <script src="assets/js/list.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/student-billing.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:35 GMT -->
</html>
