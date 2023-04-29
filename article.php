<?php 
    get_header();
?>
<style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700");
@import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");

body {
  font-family: Lato, sans-serif;
}

.container {
  display: grid;
  grid-template-columns: 4rem 3fr 1fr 2rem;
  margin-top: 2rem;
  grid-column-gap: 2rem;
}

.header {
  grid-column: 2 / 5;
}

.heading {
  font-family: Montserrat, sans-serif;
}

.header .subheading {
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  font-size: smaller;
  color: #455A64;
}

.content {
  grid-column: 2 / 3;
  text-align: justify;
  font-size: 1.1rem;
  line-height: 1.4;
}

.content .poster-image {
  width: 100%;
  object-fit: cover;
}

.aside .heading {
  margin: 0;
  font-weight: 600;
}

.footer {
  grid-column: 1 / 5;
  background-color: #37474F;
  padding: 0.7rem 1rem;
  margin-top: 3rem;
  text-align: right;
}

.footer .name-link {
  color: #FFFFFF;
  text-decoration: none;
}

@media only screen and (max-width: 600px) {
  .container {
    grid-template-columns: 2rem 3fr 1fr 2rem;
  }
  .content {
    grid-column: 2 / 4;
  }
  .aside {
    grid-column: 2 / 4;
  }
}

.card {
  height: 5rem;
  display: flex;
  align-items: center;
  text-transform: capitalize;
  margin: 1rem 0;
  cursor: pointer;
}

.card img {
  height: 100%;
  width: 40%;
  margin-right: 0.5rem;
}

.card p {
  margin: 0;
}

.card .title {
  font-size: 0.8rem;
}

.card .author {
  font-size: small;
}



</style>

    <main class="container">
  <header class="header">
    <p class="subheading">Subheading for the Page</p>
    <h1 class="heading">Main Header of the Page</h1>
  </header>
  <section class="content">
    <img src='https://images.unsplash.com/photo-1466436578965-5cba086a1824?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=ac7f8b732c22f512fd982ffddc2078d6' alt='large-image' class="poster-image">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore cum aperiam ex, recusandae non qui tempore. Quisquam, cupiditate! In suscipit tenetur sit beatae inventore aliquid fugit expedita quis totam. Pariatur?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore cum aperiam ex, recusandae non qui tempore. Quisquam, cupiditate! In suscipit tenetur sit beatae inventore aliquid fugit expedita quis totam. Pariatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore cum aperiam ex, recusandae non qui tempore. Quisquam, cupiditate! In suscipit tenetur sit beatae inventore aliquid fugit expedita quis totam. Pariatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore cum aperiam ex, recusandae non qui tempore. Quisquam, cupiditate! In suscipit tenetur sit beatae inventore aliquid fugit expedita quis totam. Pariatur?</p>
    <p>Velit scelerisque in dictum non consectetur. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Interdum velit euismod in pellentesque massa. Amet porttitor eget dolor morbi non. Pellentesque diam volutpat commodo sed egestas egestas. Massa sapien faucibus et molestie ac. Rhoncus aenean vel elit scelerisque mauris. In est ante in nibh mauris cursus mattis molestie a. At imperdiet dui accumsan sit amet nulla. Egestas erat imperdiet sed euismod nisi. In pellentesque massa placerat duis ultricies lacus sed turpis tincidunt. Maecenas volutpat blandit aliquam etiam. Orci phasellus egestas tellus rutrum tellus pellentesque. Id ornare arcu odio ut sem nulla pharetra diam sit. Faucibus pulvinar elementum integer enim. At risus viverra adipiscing at in tellus. Eget mauris pharetra et ultrices. Nulla posuere sollicitudin aliquam ultrices sagittis orci a.

Diam quam nulla porttitor massa id neque aliquam. Pharetra convallis posuere morbi leo urna molestie. Venenatis cras sed felis eget velit aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Eget nulla facilisi etiam dignissim diam. Commodo sed egestas egestas fringilla phasellus. Etiam erat velit scelerisque in dictum non consectetur a erat. Pretium aenean pharetra magna ac. Mattis nunc sed blandit libero. Quam id leo in vitae turpis massa sed elementum. Sem viverra aliquet eget sit amet. Neque aliquam vestibulum morbi blandit cursus risus at ultrices mi. Felis donec et odio pellentesque diam. Convallis posuere morbi leo urna molestie at elementum eu. Tincidunt ornare massa eget egestas purus viverra. Id faucibus nisl tincidunt eget. Quisque id diam vel quam elementum pulvinar. Aliquam purus sit amet luctus venenatis lectus magna. Diam donec adipiscing tristique risus.</p>
  </section>
  <aside class="aside">
    <h4 class="heading">Other Articles you might Enjoy</h4>
    <div class="card">
      <img src='https://images.unsplash.com/photo-1457269315919-3cfc794943cd?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=2c42c1cac3092204f4c1afdca4d44e99' alt=''>
      <div>
        <p class="heading title">The big subtext</p>
        <p class="author">Mathews</p>
      </div>
    </div>
    <div class="card">
      <img src='https://images.unsplash.com/photo-1528640936814-4460bc015292?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=66812b5fda04c80ff762c8a920f562f3' alt=''>
      <div>
        <p class="heading title">The bug subtext</p>
        <p class="author">Harsha</p>
      </div>
    </div>
  </aside>
  <footer class="footer">
    <a href="https://twitter.com/agneymenon" target="_blank" class="name-link">Boy with Silver Wings</a>
  </footer>
</main>
		
<?php get_footer() ?>
  