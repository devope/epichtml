<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<style>
.tab__title {
display: inline-block;
list-style: none;
}
.tab__title--active {
background-color: #ff0;
}
.tab__content {
display: none;
}
.tab__content--active {
display: block;
}
</style>
</head>
<body>

<div class="tab">
<ul class="tab__titles">
<li class="tab__title tab__title--active"><a href="#tab_01">ENTO TAB 01</a></li>
<li class="tab__title"><a href="#tab_02">ENTO TAB 02</a></li>
<li class="tab__title"><a href="#tab_03">ENTO TAB 03</a></li>
<li class="tab__title"><a href="#tab_04">ENTO TAB 04</a></li>
</ul>
<div class="tab__contents">
<div class="tab__content tab__content--active" id="tab_01">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim debitis commodi accusamus veritatis beatae voluptatem veniam a delectus mollitia sapiente. Tempore accusamus commodi sit iure suscipit repudiandae, illum nobis quibusdam.</div>
<div class="tab__content" id="tab_02">Perspiciatis nisi velit, dicta quas cumque quasi atque vitae ipsam commodi dolor veniam, deserunt nulla illum corrupti magni nihil exercitationem quae expedita laborum numquam, in voluptates saepe! Molestias, voluptatum, architecto?</div>
<div class="tab__content" id="tab_03">Magnam dolorem ducimus praesentium quidem error quos amet aspernatur assumenda eaque soluta necessitatibus tenetur a, nisi cumque animi ratione, accusantium! Incidunt fugit non eligendi veniam voluptatem inventore repellendus iste ratione!</div>
<div class="tab__content" id="tab_04">Eligendi sint eius porro tempore sequi autem neque distinctio obcaecati, amet quis error consequuntur, numquam ipsum nam quisquam cum corrupti quod odit ipsam modi. Ipsam autem nam saepe pariatur, enim!</div>
</div>
</div>

<script src="http://xampp/epichtml/node_modules/jquery/dist/jquery.js"></script>
<script src="script.js"></script>
</body>
</html>