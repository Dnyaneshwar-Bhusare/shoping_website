

<?php
															
include "dbconnect.php";





															function getUserIpAddr(){
															    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
															        //ip from share internet
															        $ip = $_SERVER['HTTP_CLIENT_IP'];
															    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
															        //ip pass from proxy
															        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
															    }else{
															        $ip = $_SERVER['REMOTE_ADDR'];
															    }
															    return $ip;
															}

                                                                $id = $_GET['prd_id'];
                                                                echo $id;
                                                                $ip_add=getUserIpAddr();
															
							





																$add_to_card_query =
																	"INSERT INTO cart VALUES('$id','$ip_add','2')";
																$add_to_cart = mysqli_query($con, $add_to_card_query);
														

															?>
															