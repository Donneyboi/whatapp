<?php session_start();
include "db.php";

$sel=mysqli_query($conn, "select * from post ORDER BY time DESC");
while ($row=mysqli_fetch_array($sel)) {
	$email=$row['email'];
	$post=$row['message'];
	$idx=$row['id'];
	

$postselect=mysqli_query($conn,"select * from signup where email='$email'");
$row2=mysqli_fetch_array($postselect);
$firstn=$row2['firstname'];
$last=$row2['lastname'];
$file=$row2['file'];

 ?>


	                           <div class="bigpostdiv">
								<div class="posthead">
									<div class="postheadimage">
										<img src="img/2022_07_19_16_45_IMG_2770.png">
									</div>
									<div class="postheadname">
										<h3><?php echo $firstn." ".$last ; ?></h3>
									</div>
									<div class="postheaddelet">...</div>
								</div>
								<div class="container">
									<div class="fortext" style="word-break: break-all;"><?php echo $post  ?></div>
									<div class="forimage">
											<?php
                 $selimage=mysqli_query($conn, "select * from postimage where postid='$idx'");
            while($fetchimage=mysqli_fetch_array($selimage)){
                 $postfile=$fetchimage['imagename'];

                    echo "<img src='img/$postfile' />";
                        }



                     ?>
									</div>
								</div>



								                                           <div class="likeediv">




                                          		  	<span class="fa fa-thumbs likespan" style=" margin-left: 10px; margin-top: 4px">
                                          			<?php  
                                          			$selS=mysqli_query($conn,"select * from likes where postid='$idx'");
                                          			$numss=mysqli_num_rows($selS);
                                          			if ($numss<1) {
                                          			
                                          			}
                                          			else{
                                          			echo $numss." "."likes";
                                          			}
                                          			?>
                                          		</span>
                                          		       
		<script type="text/javascript">
				$(document).ready(function () {
				$('.flike<?php  echo $idx;?>').on('submit',function (para) {
					para.preventDefault();
					$.ajax({
				url:"processlike.php",
                 type:"post",
                 data:new FormData(this),
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                  $('.likeshow').html("wait");
                 },
                 success:function(para2){
                 	$('.likeshow<?php echo $idx; ?>').html(para2);
                 },
                 error:function(){
                 	alert('error typing to processData');
                 }

					})
				});
				})
			</script>
								
<div class="likeshow<?php echo $idx; ?>"></div>
								<form class="flike<?php echo $idx; ?>" action="processlike.php" method="get">

                                                     <div class="likecontaner">
									<input type="hidden" name="like" value="<?php echo $idx ?>">
							<button type="submit" class="fa fa-heart"></button>
					

                                  <button onclick="showc(<?php echo $idx; ?>)" class="fa fa-comment showcoment"></button>

                                      </div>


			</form>





								</div>


 <form id="comm<?php echo $idx; ?>" class="comments" method="get" action="" style="display:none;">
                                      	<?php $sek=mysqli_query($conn, "select *from comment where postid='$idx'"); ?>
							          
<div class="commenthead">
                                      		<label class="fa fa-arrow-left"></label>
                                      		<h3>comment</h3>
                                      	</div>
                                      
                                      <?php while($ftch=mysqli_fetch_array($sek)){
$cm=$ftch['message'];
$cemail=$ftch['email'];
$co=mysqli_query($conn, "select * from signup where email='$cemail'");
$crow=mysqli_fetch_array($co);
$firstn=$crow['firstname'];
$lastn=$crow['lastname'];
                                      	echo '
                                      		<div class="commentbody">
                                      		<div class="commentbody1">
                                      			<div class="commentbody2">

                                      				<div class="commentbody2name">'.$firstn.' '.$lastn.'</div>
                                      				<div class="manicoment">'.$cm.'</div>
                                      				


                                      			</div>
                                      		</div>
                                      	</div>';
                                      } ?>



                                    <div class="commentfoot">
     <input type="hidden" name="postid" id="postid<?php echo $idx; ?>" value="<?php echo $idx; ?>">
           
           <input type="text" name="message" id="message<?php echo $idx; ?>">

       <label for="com<?php echo $idx; ?>">go</label>
       
        <button onclick="commentform(this)" style="display: none; " name="commentbt" id="com<?php echo $idx; ?>" value="<?php echo $idx; ?>" type="button"></button>
                                      	</div>



                                      	</form>
		
						</div>
		


<?php 
}

 ?>
 <div class="commentcheck"></div>
 	<script type="text/javascript">
 		function commentform(p) {
 			p=p.value;
 			
 			var postid=document.getElementById('postid'+p).value;
 			var message=document.getElementById('message'+p).value;

               datas="postid="+postid+"&message="+message;
					$.ajax({
				url:"processcomment.php",
                 type:"GET",
                 data: datas,
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(data){
                  $('.commentcheck').html("wait");
                 },
                 success:function(data){
                 	$('.commentcheck').html(data);
                 },
                 error:function(data){
                 	alert('error typing to processData');
                 }

					})
					 		}
				
			</script>


			<script type="text/javascript">
	
function showc(p) {
		alert(p)
	$('#comm'+p).toggle();
	}
</script>
