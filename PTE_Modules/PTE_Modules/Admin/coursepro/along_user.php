
<?php
session_start();
error_reporting(0);
include 'confing.php';

    if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from speakig  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$_SESSION['delmsg']="Category deleted scuccessfully";
header('location:manage-aloud.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


		<div class="breadcrumbs-area mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#" class="active">Issues-books</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs-area-end -->
        <!-- entry-header-area-start -->
        <div class="entry-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="entry-header-title">
                            <h2>Issued-books</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- entry-header-area-end --> 
        <!-- compare main wrapper start -->
        <div class="compare-page-wrapper mb-70">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Compare Page Content Start -->
                            <div class="compare-page-content-wrap">
                                <div class="compare-table table-responsive">
                                    <table class="table table-bordered mb-0 text-center">
                                     
                                    		

                                    <tbody>

                                       <?php $sql = "SELECT * from  speakig";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>                                      
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo htmlentities($cnt);?></td>
                                        </tr>
                                        <tr>
                                            <td class="center"><?php echo htmlentities($result->question);?></td>
                                            </tr>
                                            <tr>
                                            <td class="center"><?php echo htmlentities($result->answer);?></td>
                                            </tr>
                                            
                                            <td class="center">

                                            <a href="edit-author.php?athrid=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button> 
                                          <a href="manage-authors.php?del=<?php echo htmlentities($result->id);?>" onclick="return confirm('Are you sure you want to delete?');"" >  <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
                                            </td>
                                        </tr>
 <?php $cnt=$cnt+1;}} ?>                                     
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- Compare Page Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>




</body>
</html>