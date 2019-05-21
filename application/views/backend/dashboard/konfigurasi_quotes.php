<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><?php echo $title ?></h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right small">
                    <li class=""><a href="<?php echo site_url('/dashboard')?>">Dashboard</a></li>
                    <li class="active"><?php echo $title ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<?php echo $this->session->flashdata("sukses");?>
<p></p>

<div class="container">
<form action="<?php echo base_url('dashboard/post_quote'); ?>" method="POST" role="form">
    <input type="hidden" name="id_quote" value="1">
    <legend>Quotes</legend>
    <br>
    <div class="form-group">
        <label for="">Quotes 1</label>
        <textarea type="text" class="form-control col-sm-4" name="quote" placeholder="Input field"><?php echo $ambilquote->quote;?></textarea>
    </div>
    <div class="form-group">
        <label for="">Quotes 2</label>
        <textarea type="text" class="form-control col-sm-4" name="quote1" placeholder="Input field"><?php echo $ambilquote->quote1;?></textarea>
    </div>
    <div class="form-group">
        <label for="">Quotes 3</label>
        <textarea type="text" class="form-control col-sm-4" name="quote2" placeholder="Input field"><?php echo $ambilquote->quote2;?></textarea>
    </div>
    <div class="form-group">
        <label for="">Quotes 4</label>
        <textarea type="text" class="form-control col-sm-4" name="quote3" placeholder="Input field"><?php echo $ambilquote->quote3;?></textarea>
    </div>   

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
