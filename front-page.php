<?php get_header(); ?>

    <main id="front-page" class="container">

        <?php 
            $heroImage = get_template_directory_uri() . '/img/stock_photos/server_farm1.jpg';
            $text = '<p>Zyber allows for file sharing in a secure private cloud with
                    browser-based convenience, 256 bit AES encryption with the access speed of a
                    fast-loading web application.</p>';
            set_query_var( 'text', $text );
            set_query_var( 'heroImage', $heroImage );
            get_template_part( 'template-parts/hero', 'none'); 
        ?>

        <section id="zero-footprint">
            <div class="underlay">
                <div class="underlay-content">
                    <h2>Zero Footprint Technology</h2>
                    <span class="sub-heading">(AKA Negligent Users Literally Can't Mess This Up)</span>
                </div>
                <p>Files are never saved to the negligent device without authorization. 
                User-level permissions allow control of WHO can access files and WHERE they
                are accessed, leaving no trace for hackers to exploit.</p>
                <button class="cta"><a href="https://www.myzyber.com/" alt="Learn more about the Zyber App">Learn More</a></button>
            </div>
        </section>

        <section id="setup-in-mins">
            <ul class="tri-icon">
                <li><i class="fa fa-clock-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-bolt" aria-hidden="true"></i></li>
                <li><i class="fa fa-thumbs-up" aria-hidden="true"></i></li>
            </ul>
            <h2>Setup in Minutes, not Days</h2>
            <p>Why spend days, months, or even years on a POC when you can have our
            solution setup in less than a minute? Compliance standards and sophisticated
            hacks are growing exponentially each day. We get it. And we’ve created a
            solution to combat these growing concerns for organizations small and large
            that is quick and easy to setup, and ready out of the box. Try a trial of
            fully featured Zyber free of charge for a limited time.</p>
            <button class="cta"><a href="https://www.myzyber.com/" alt="Download the Zyber App">Try Zyber Free Today</a></button>
        </section>


    </main>

<?php get_footer();
