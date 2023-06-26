<?=$this->extend('layout/base')?>


<?=$this->section('content')?>

<div class="container">
    <h2 style="text-decoration: underline; text-align:center;">Blog</h2>
    <div class="page_cover_img">
        <img src="<?= base_url('images/9e687619650116619f0d6affdd31fa6b.jpg') ?>" alt="cover images">
    </div>

    <div class="blog_block">
        <div class="row">
            <div class="col-md-8">
                <div class="blog_flex">

                    <?php
                    
                    if(count($data) > 0){
                        foreach($data as $value){?>
                            <div class="card" style="width: 20rem; margin:10px">
                                <img class="card-img-top" height="200px" src="<?= base_url('uploads/'. $value->article_image) ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title btn btn-sm btn-primary"><?= $value->category_name ?></h5>
                                    <h6>
                                        <a href="<?= base_url('blog_show/'. $value->id) ?>">
                                            <?= $value->article_title ?>
                                        </a>
                                    </h6>
                                    <p class="card-text"><?= $value->article_description ?></p>
                                    <div class="blog_card_image">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAAB5CAMAAADszSiHAAAASFBMVEX39/eDg4ONjY3x8fH6+vr///9/f398fHx5eXmWlpbr6+t2dnaGhobIyMjl5eXg4ODZ2dmqqqrQ0NC2tracnJy/v7+kpKSwsLDfxd+7AAADiElEQVR4nO2b2XLbMAxFSQkktVm75P//09KKG9udVARi6jLt6D758Qw2gQCs1KlTp/4HEZHxog/5H6mBbkgq78dlGta13DQP01iptGRE/TVzReGctVZvstYVbm0TmozUaIs7zatsPbcmFVU1u6+YPsD0ksaT1NovLfVbRZnCYNT/3VS/PTnC7UVVs2urTW5Bc5ksTOUduWD9SJeCQaU12I95xqLSusmBVNTxjOXdeAG60UyhNPxUiaNSVHKptG5x0VU1bCqHC3rqONXhjjXBgotGdmhpO8OwBBHvhcMa+E7UNYpKmfJnYnFr/IbVoVLR1BKsHlYhJFgFCotyCZa7oLCqE+ufx1L0I0NeGQEVsm5df2SVl3QQusBhtRIv4pp59sPH91srDkvQ2TjcC5ZGgbWmFfXIMKsg5G2Nqqei7tS/YFFYol4e19lI6pZ2FYbKvxMFVMDnvqBuaTvAmmYzC57VsMaGPXW7CddB+I8iH8sBB1z84LIDEIvYHRdwkHSbynP75gZVtTYZprXcFToCp5HJVWE3BjRwkhG/X6E1bC8L3mLcsLpw1GfIZcFdJthGIPv4B1ZwJghrAF+wgs1ggfscPkR9yFrQPdSDK+BFNyXaVu/vWLJERwdm2jOXxc1yX0XjbqVPEfAbVr+LBVzZvWK1e4W+adNQKVXtVa4mlRPVvOdD5GTrRbvG8l0NuNe6yyz7WKnKaegRm6KvoTy4SK/xN0nUuvDYJitzcCufszawbsZSKeZeuEA+yEzHupO62ws1DKSJcVP2yZVBqj2ZseTPa7ysu9LhnjRt5iRz5s1gesmPBCPKLwL/PYFlS0UH+ZJMN1mR/57B3NAf4EuiapS771nWNbFNRqodMskw/msVzdCrWGTe9peyfsdQD9k68+EfAYxUN9i3vPcnmVv7NxPTG3ycGd9kKZg32fd96VPv6r6bevsqvMm+lZjvp96+tsSUfi9J9WuE1NuXa+aLJDFJLU2k1NuXLeyV3SlSe7ihnsgct8MITYgiizkGC8/T4op5VU8XnAtvYk5+ZRvyCCpZwSU6K40h3rqKu2aKJubcUHLMFkOsf7gEZnwHyGaMmKfAIOYAcS7iOKuvyGLduwj+aBFJnElYDqfSOjxBkdw4RJMNVi7JRUg0hYNLdjMWSeH/txh8xGvGZzENVhaKrRNLhpUg5G0Ya80SKHxAmCdREOvUqVMJ9AsYujF1/ZStTQAAAABJRU5ErkJggg==" alt="">
                                        <div class="blog_card_title">
                                            <h4>Admin/Admin</h4>
                                            <p>
                                                <span>Oct 15, 2022 03:14 PM</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } else{ ?>
                        <div>
                            <p>No data found</p>
                        </div>
                    <?php }
                    
                    ?>
                </div>
            </div>

            <div class="col-md-4">

                <div class="menu_search">
                    <div class="search_form">
                        <form action="" method="post" id="searchform">
                            <input type="text" name="search" id="search" placeholder="Search...">
                            <input type="submit" name="submit" value="Search">
                        </form>
                    </div>
                </div>

                <div class="social_icon">
                
                    <div class="icon_block">
                        <div class="icon_flex">
                            <div class="all_icon">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <i class="fa fa-address-book" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="advertise">
                    <div class="advertise_img">
                        <img src="https://st2.depositphotos.com/1006899/8421/i/600/depositphotos_84219350-stock-photo-word-blog-suspended-by-ropes.jpg" alt="">
                    </div>
                </div>

                <div class="catgeory_block">
                    <div class="category_title">
                        <h2>Catgeories</h2>
                    </div>

                    <div class="categories_style">
                        File Upload
                        <div class="icon_div">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>

                    <div class="categories_style">
                        Movie Sharing
                        <div class="icon_div">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>

                    <div class="categories_style">
                        Music Sharing
                        <div class="icon_div">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>

                </div>

                <div class="article_blog">
                    <div class="category_title">
                        <h2>Popular Article</h2>
                    </div>

                    <div class="category_list">
                        <div class="catgories_style">
                            <img src="data:image/png;base64,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" alt="">
                            <div>
                                <a href="">
                                    <h4>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, suscipit.
                                    </h4>
                                </a>
                                <p>
                                    <span><i class="fa-regular fa-calendar"></i>15 Sep,2023 3.14 PM</span>
                                </p>
                            </div>
                        </div>
                        <div class="catgories_style">
                            <img src="data:image/png;base64,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" alt="">
                            <div>
                                <a href="">
                                    <h4>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, suscipit.
                                    </h4>
                                </a>
                                <p>
                                    <span><i class="fa-regular fa-calendar"></i>15 Sep,2023 3.14 PM</span>
                                </p>
                            </div>
                        </div>
                        <div class="catgories_style">
                            <img src="data:image/png;base64,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" alt="">
                            <div>
                                <a href="">
                                    <h4>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, suscipit.
                                    </h4>
                                </a>
                                <p>
                                    <span><i class="fa-regular fa-calendar"></i>15 Sep,2023 3.14 PM</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<button id="click">Ok</button>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $('#searchform').submit(function(e){
        e.preventDefault();

        var search = $('#search').val();

        if(search === ''){
            alert('Please enter a search string');
        }else{
            $.ajax({
                url: '/search',
                type: 'POST',
                data: 'search='+search,
                success: function(response){
                    alert(response);
                }
            });
        }
    });
});
</script>

<?=$this->endSection('content')?>