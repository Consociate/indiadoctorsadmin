<div class="span4">

                        <div class="todo">
                            <h4>To Do List <a href="todolist.php" class="icon tip" title="Add task"><span class="icon16 icomoon-icon-plus-2"></span></a></h4>
                            <ul>
                            <?php 
	                        	$todolist = getUserToDoList($_SESSION['uid'], date('Y-m-d'));
	                        	$index = 0;
	                        	foreach ($todolist as $todo){
	                        		echo '<li class="clearfix">
                                    <div class="txt">
                                        '.$todo->getTasklabel();
	                        		if(strtotime($todo->getFromdate()) == strtotime(date('Y-m-d'))){
	                        			echo '<span class="date badge badge-important">Today</span>';
	                        		}else if(strtotime(date('Y-m-d',mktime()+86400)) == strtotime($todo->getFromdate())){
	                        			echo '<span class="date badge badge-success">Tomorrow</span>';
	                        		}else{
	                        			echo '<span class="date badge badge-info">'.date('d-m-Y', strtotime($todo->getFromdate())).'</span>';
	                        		}
                                    echo '</div>
                                    <div class="controls">
                                        <a href="processtodolist.php?ac=2&tid='.$todo->getTid().'" title="Remove task" class="tip"><span class="icon12 icomoon-icon-remove"></span></a>
                                    </div>
                                	</li>';
	                        		$index++;
	                        		if($index > 5){
	                        			break;
	                        		}
	                        	} 
	                        	if(!$index){
	                        		echo '<li class="clearfix">
                                    <div class="txt">
                                        Nothing to be done today!
                                    </div>
                               	 </li>';
	                        	}
                            ?>
                                
                            </ul>
                        </div>

                    </div><!-- End .span4 -->