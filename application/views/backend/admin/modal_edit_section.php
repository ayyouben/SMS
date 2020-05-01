<?php 
$edit_data		=	$this->db->get_where('section' , array('section_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_student');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() .'index.php?admin/section/do_update/'.$row['section_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" data-validate="required" value="<?php echo $row['name'] ?>"
                                     data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nick_name');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nick_name" data-validate="required"  value="<?php echo $row['name']?>"
                                    data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div>
           
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('teacher');?></label>
                                <div class="col-sm-5">
                                    <select name="teacher_id" class="form-control" style="width:100%;">
                                    	<?php 
										$teachers = $this->db->get('teacher')->result_array();
										foreach($teachers as $row2):
										?>
                                    	<option value="<?php echo $row2['teacher_id'];?>"
                                            <?php if($row['teacher_id'] == $row2['teacher_id']) echo 'selected';?>
                                         >
                                            <?php echo $row2['name'];?>
                                           </option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                </div>
                            </div>
                       

                        <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>
                                <div class="col-sm-5">
                                    <select name="class_id" class="form-control" style="width:100%;">
                                    	<?php 
										$class = $this->db->get('class')->result_array();
										foreach($class as $row3):
										?>
                                    		<option value="<?php echo $row3['class_id'];?>"
                                            <?php if($row['class_id']== $row3['class_id']) echo 'selected'?>
                                            >
                                            <?php echo $row3['name'];?>
                                            </option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                
                            </div>
                        </div>

                        <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo get_phrase('save_section');?></button>
                              </div>
					     </div>
        		</form>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>


