<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>

<?php

foreach($data as $value){

}

?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="blog_image">
                <img src="<?= base_url('articleImage/'. $value['article_image']) ?>" alt="blog image">
            </div>

            <div>
                <h4><?= $value['article_title'] ?></h4>
                <p>
                    <span><i class="fa fa-user" aria-hidden="true"></i></span> Admin Admin <b></b> <i class="fa fa-calendar-o" aria-hidden="true"></i> 15 Sep,2023 12.20 AM
                </p>
                <p>
                    <?= $value['article_content'] ?>
                </p>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
            <div class="menu_search">
                        <div class="search_form">
                            <form action="<?= base_url('search') ?>" method="post">
                                <input type="text" name="search" placeholder="Search...">
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
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATUAAAB8CAMAAAA/4dcmAAABU1BMVEW06r3///+d3qzy8vJmZmbOqor958+48L9QaI/GzdXW3OPu7+/c3uP/wiiP1J/5+flqcHWg5K2BrqK3wc1sl5iMtKnZr4lekI9xlZ2q5LVmcYqaobtkj5SX2ab/79Th5Omm2rpJWm1ni5ZWbIvdz8GMnbDvvTXr+e2doqpgXWHKw7vUyL1LSklPZ3/s3sr/xx+EyKhrfYHL79FTWGR5pKOvrrDAu7jA7cioxc2lssGGj5y9nIBwj41phIuPvq1jc32aya9UXXdac4ba899haHVFb48hVn83YYSGka8xUnH+28L/za9HTFN1go9geZh7kKe7r5mbk3+8oF7UqDemw8CPhYGtimeul2Cgk4uVc1d8eXmtmnGwoYbbrUqnpZzQq2HQjC7AronxmgDPsXXHoEuqkX+6kVp6Z2TpmSXCl1KzgUeIgW6Ok4tgpp52tZ1Ngpc1UoNrAsb9AAAJJUlEQVR4nO2c+1fa2BaAk/BqHhIxypjaGLREATV4xcQGfNBKpzOtEFuLpVrtnY547512pvf//+mekwckGIQZglzOnG+51BUi5Xxr77PPPklDEBgMBoPBYDAYDAaDwWAwGAwGg8FgMBgMBvNAJACT/gxTBfSVsSCwuWFJZBb29w/+ATjY3z0ksLchSBC7R7O12mw0D4nWXixibwNJVLdqs7Oz0S75rQW0tYnJIRDvfYvD51G/NEBp8YE+/2QQk9RA7rWWqAZIA9rmH2wIE2Bka8QLmJ53rEVrCw81hAkwqrXEbilQWjR6lHmwQTw4I1pLEFuzfazlEcnRnYBjtrX+hWCQtYVaP2vR55lxDeRBOQ445ljrG2aDrB30t1baRWH5sUe6wXbcjbrRrCWqR32lRaNbKFjjyfU965e9dX7PPTiitcPZe6w9fYBBjReROCZJ8piwBIQXa3P9ExSFiW1nnYSs91aEEa3t3metdDjdKeo4C/A2YjXYv89aftq70b0dR1q4sZY5yEdr+VKtZJPP+61NfREVQTEg3XLgPT5arO2uvszlNE3TIZqWK7/Io2QNECRt5PVa5sdlH9kVT7AtImBthzy+O/zRranxbNxCjasb6obX2hMErO3BUEv0ICZTAOtbEParYu9fJdwLK4nMq5yu29YKWk7zW1tFwBrsQxPVhR7mhqD3b+w/hEoSmZ/1jbgTa4VsfBk9a4DEvMyFg/yTa2057gFRa3yEY60vOTIS5JJtbSXns5ZF1Br7jJGfMRHwNRK8Y61Uj792jL1+jay1CBsOHWu1N29sba/fIGhtB64fEvN0WDjzWmkFLDxUNZtFMUPFHRLudyTmmZDgXGsn2nJc1bUga9O+yt3b4a2+PTFPhoVbDTbr1go3qBpMvTV7d20s1kretYeKkjWCOCZhEzoOayd11WNty9O9T781cd2uBsMIERrMsNaqK5ubJ+WONl/3jsSeB2SwNYYjBdNUZE4e2trmydGG5U1V9cbfyJrsEiGVp5wCDjRMkyF5lwHWNjdX6np2o6DnCn+nWOsswliSMRUBHFEUw+AZ93CknzWxWrKsnRzpBR127555Lf982nfAXfpY8wQVoyhwUlMM8KMTgkHBtpQC70f9cbJ5crJypGXhlqS3GpRqB3MZtK15MV5y4Ltp0gPOW0qCUKO2nxzsrjY2/DU0X3r+eDEz6bGGxzA1lGvQIOCCkvKONUqSiMThK23Za630c0OI8MLhpMcaHkOtPHiaHlRAobUURcDd8cVHZc9OkfrKDVIjM+nBhsaIq1yeZ1lX6FJKEpPbcwr9ytsb6A03sxl0gm0UayxXKBROf3nLOdak7eqCwfCNRtaToPVcp3IYkx5saIxiTXh3drY2U5zRHGvvn9EcLB5CtiNtuVzvFpGl+2+CniLutcYH0H2RMc+KxZmZ4lrdzlG7XggtRXYzdFnNNZXu26EzsVnW+KAN7eDD0Iz9On3+8WoGUPygGyQ83fJjtFoMq9iLtazWaNUjyFoLvAwwwBqrfzQ/F6G1T6rZsSY000eg/TLK5bKp0EbrwrvIw9YiEfpj+dKKtXeqRvO2NaYZg9acFBaabcGb8AZa81pHicxxMjukNblczn26AtWgeB0v05Y1PleJpZuMM+3l2u2cr/NSJj3Y0PBZk68vLz/RfK81eFVAvmMtIptaVrv+9fPVt3g8B1QpMt1Mx2Ixk2EjLAMCrZ3z9xOoWBN91kj6c7G4pvdY4+kKoE1H+B5rvJDTdDVbKICmU9VkculwtQKkpSstTdNa7VjLYH3S5PeTHm44SJToscZpJiiKa6eyxxp3fXr69sPt7e3521OB9FoDMxldzhZyWtxaZhRo0Ifuw1ADVECitsuMNz0FcHp10uMNh2TSY43V/3l+Bmb3X7zWmMs1l5mGwHes8YxAM0aunFWdve6sIvyU2o9Z2tLpWLsu+ALNoBEpoRS0RnmsXX+xrP3K8F1rrH4GVxdWrTw6h9qs03n57dXNzc3XQtnd3VB12lh9cdFqt1uti7rC+DfgFCCNRSJBkyIhSZ5Yk9tfbteAnM+CxxovfJ5xrTUu2rJtjc3960MRcPNSde9Vy8IqCjpThmbubFlGrG1NNBI0mSQoibpr7cZrLSKfrrnWTK0CwtBaVNzWP8Be6oYzdCdD9b57ljxtwI6Lf4/ERq6UFEVJ6lrjzv/9H2jtSvda442zjrWWE2u83Gra1hheMPRCVs3qQr9NS0awZzgOjX0iiaJEb6xxvznWfLHGC1eutfpHzakGYNVvWwPLEZkWBME0Aq9aAVeC4Cx6n1UnPeBQkKikP9ZugzLUY+2xJkc61eAbnNcuWWsPhAVrWoO+641nDMEtC/LupMcbDhSVJLzWwLxm11DaZ41+ZxfR4prSXeUaSmP269eLhmIBejAgzlD84hilXDc6eYvEsoOA85rFD661yPWX365Ab3Dq7w145QyGVXGt3tsb+ACnL23PryqGQIOUNRSz3qqkW50SwcyhUAoIa14DpFxrrGk2zAbc4TEF1ttRGfBgudwwuUHW4E312wew/7JWup1GHmAiIq3XWrcG8t4MtX6xiQy0Bt5u+1usQ7rlXFEghSqq1u5quH+naLC1WFuwlfPTfweWy1+zxv4ZaxVnf41GJtS81oKuqvB9jvc/HVqjfNbSTQGpAkr4rIXDEizJPmuxWN3Shs6F0DFYgxma8VtLt76DhspIUpMebViMxRol+a2BFUi7WX/8+6DHaE0LYq81mevcncZ1VfDdw75bTD0nyz5r+7FewNJtP0VJSGiTkj3WYBfu0rXDeg57N4M8J7uNlGUttXjHGvBWBy+hoI2SxpOhqSdB1i62QbBN/9wmSuOy9kOAtVhlFYlgA9Z6MzQka79XgoKt+QcKwTY+a9utoGCLrYLQliY96lEBQxiPNSpzkQ7M0Xm4nzfdgGXHuKxJB4HWYq05FKxRY7KW+h5sLfatOu0ZalmTxmMtsIjCHC1vT3rYfwHv40rE7pNOQvyfjvZzUqrtdDCxfaLztBTfk1P+n5lbdNlNHD7p8PJRWPzXecdHj3t46vDjd/vfBx+m6nyUuUlbGYTv0TiBT8x5KIgpijUMBoPBYDAYDAaDwWAwGAwGg8FgMNPJ/wDgdIvTlWespwAAAABJRU5ErkJggg==" alt="">
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


<?= $this->endSection('content') ?>
