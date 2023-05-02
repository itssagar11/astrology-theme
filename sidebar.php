<aside>
                
                    <div class="sidebar">
  <h5 class="sidebar-heading">Horoscopes</h5>
  <ul class="list-unstyled">
    <li >
      <a href="#" class="text-success">
         Aries
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-taurus"></i> Taurus
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-gemini"></i> Gemini
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-cancer"></i> Cancer
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-leo"></i> Leo
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-virgo"></i> Virgo
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-libra"></i> Libra
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-scorpio"></i> Scorpio
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-sagittarius"></i> Sagittarius
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-capricorn"></i> Capricorn
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-aquarius"></i> Aquarius
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-pisces"></i> Pisces
      </a>
    </li>
  </ul>
  <ul>
  <?php
  $args = array(
    'taxonomy' => 'horoscopes',
    'title_li' => '',
    'show_count' => true,
  );
  wp_list_categories( $args );
  ?>
</ul>
</div>

                <?php } ?>
                </aside>