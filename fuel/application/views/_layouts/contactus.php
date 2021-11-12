<?php $this->load->view('_blocks/header'); ?>
<style>

</style>
<div class="clr"></div>
<div class="sm_wrapper min_height">
 <div class="inner-page-wrapper"> 
 <div class="container">    
        <?php
        if ($this->session->flashdata('message') != '') {
            ?>
            <span class="succ_msg">
                <?php echo $this->session->flashdata('message'); ?>
            </span>
            <?php
        }
        ?>

        <h3>Send us your Enquiry</h3>
        <p class="reqiredtext textright">Fields marked with <span style="color:red;">*</span> are mandatory.</p>
        <form action="<?php echo base_url('contact_us/send'); ?>" method="post">
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Name:<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php
                    if (isset($name)) {
                        echo $name;
                    };
                    ?>" required="required">

                    <span style="color:red;"><?php echo form_error('name'); ?></span>
                </div>
                <div class="form-group col-sm-6">
                    <label>Email:<span style="color:red;">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php
                    if (isset($email)) {
                        echo $email;
                    };
                    ?>" required="required">

                    <span style="color:red;"><?php echo form_error('email'); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="form-group  col-sm-6">
                    <label>Phone No.</label>
                    <input type="text" class="form-control" maxlength="10" id="phone" name="phone" placeholder="Phone" value="<?php
                    if (isset($phone)) {
                        echo $phone;
                    };
                    ?>">

                    <span style="color:red;"><?php echo form_error('phone'); ?></span>
                </div>
               
            </div>
            <div class="form-group">
                <label>Enquiry:<span style="color:red;">*</span></label>
                <textarea name="feedback" cols="40" rows="3" class="form-control" id="feedback" placeholder="Feedback/Enquiry" required="required"><?php
                    if (isset($feedback)) {
                        echo $feedback;
                    };
                    ?></textarea>

                <span style="color:red;"><?php echo form_error('feedback'); ?></span>
            </div>
            <div class="form-group">
                <label>Captcha<span style="color:red;">*</span></label>
                <div class="g-recaptcha" data-sitekey="6Ld3iskZAAAAAH-H755JYi_OybkKV77HPIjTVBC1"></div>

                <span style="color:red;"><?php echo form_error('g-recaptcha-response'); ?></span>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" style="background-color : #28a745;">Submit</button> &nbsp; <button type="reset" class="btn btn-secondary" style="background-color : #dc3545;">Reset</button>
            </div>
        </form>


        <div class="clr"></div>
    </div>

	 
</div>
    <div class="clr"></div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php $this->load->view('_blocks/footer'); ?>