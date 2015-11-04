<a href="javascript:;" id="show_menu">&raquo;</a>
<div id="left_menu">
<a href="javascript:;" id="hide_menu">&laquo;</a>
<ul id="main_menu">
    <li><a href="<?php // echo base_url('admin') ?>"><img src="/admin/images/icon_home.png" alt="Home"/>Home</a></li>
    <li><a id="menu_pages" href="{!! route('admin.categories.index') !!}"><img src="/admin/images/icon_pages.png" alt="Quản danh mục truyện"/>Quản danh mục truyện</a></li>
    <li><a id="menu_pages" href="{!! route('admin.products.index') !!}"><img src="/admin/images/icon_pages.png" alt="Quản lý Truyện"/>Quản lý Truyện</a></li>
    <li><a id="menu_pages" href="{!! route('admin.chapters.index') !!}"><img src="/admin/images/icon_pages.png" alt="Pages"/>Quản lý chapter truyện</a></li>
    <li><a id="menu_pages" href="{!! route('admin.books.index') !!}"><img src="/admin/images/icon_pages.png" alt="Pages"/>Quản lý Ebook</a></li>
</ul>
<br class="clear"/>
<!-- Begin left panel calendar -->
<div id="calendar"></div>