<?php 
    /*
    * Template Name: Contact Page
    */
    get_header(); 
?>
<body <?php body_class(  ); ?>>
<?php get_template_part( "template-parts/hero" ) ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum ut adipisci vitae in, corporis ipsam facilis omnis quasi fuga tempore pariatur atque quod ducimus! Architecto veniam sint obcaecati qui distinctio.</p>
           <div class="contact-info">
               <ul>
                   <li>Phone: +8801401 000009</li>
                   <li>Email: info@xyz.com</li>
                   <li>FAX: 889 555 000</li>
                   <li>Website: www.xyz.com.bd</li>
               </ul>
           </div>
        </div>
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.3701967527354!2d90.39056151494175!3d23.73417469531286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c1f25e613d%3A0xaad562eec578f8ff!2sArts%20Faculty%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1628354161522!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

<?php get_footer( ); ?>