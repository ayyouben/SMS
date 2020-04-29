<?php 
$edit_data		=	$this->db->get_where('librarian' , array('librarian_id' => $param2) )->result_array();
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
        <div class="panel-heading">
        <div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_librarien');?>
        </div>
        </div>
      
        <div class="panel-body">
        <div class="tab-pane box active" id="edit" style="padding: 5px">
                <div class="box-content">
                	<?php foreach($edit_data as $row):?>
                    <?php echo form_open(base_url() . 'index.php?admin/librarian/do_update/'.$row['librarian_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        <div class="padded">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="validate[required] form-control" name="name" value="<?php echo $row['name'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('cin');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="librarian_id" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
                                     value="<?php echo $row['librarian_id'];?>" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('birthday');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker fill-up form-control" name="birthday" value="<?php echo $row['birthday'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('sex');?></label>
                                <div class="col-sm-5">
                                    <select name="sex" class="uniform" style="width:100%;">
                                    	<option value="male" <?php if($row['sex'] == 'male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="female" <?php if($row['sex'] == 'female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>"/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                                <div class="col-md-5">
                                <div class="controls" style="width:210px;">
                                    <input type="file" class="form-control" name="userfile" id="imgInp" />
                                </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-md-5">
                                <div class="controls" style="width:210px;">
                                    <img id="blah" src="<?php echo $this->crud_model->get_image_url('librarian',$row['librarian_id']);?>" alt="your image" height="100" />
                                </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-md-5">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>&nbsp;&nbsp;<?php echo get_phrase('edit_librarian');?></button>
                        </div>
                        </div>
                        </div>
                       
                    </form>
                    <?php endforeach;?>
                </div>
			</div>
        </div>
        </div>
    </div>
</div>


