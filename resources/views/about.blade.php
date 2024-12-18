<!-- <h1>{{__('home.aboutPage')}}</h1>
<h2>{{__('home.subHeading')}}</h2> -->

<!-- selecting language by users -->
 <h1>Choose Your Language</h1>
 <a href="/setlang/en">English</a> |
 <a href="/setlang/hi">Hindi</a> |
 <a href="/setlang/ko">Korea</a>

<h1>{{__('about.aboutPage')}}</h1>
<h2>{{__('about.subHeading')}}</h2>

<!-- dynamic name  -->
 <h1>{{__('about.aboutName', ['name'=> 'anil siddhu'])}}</h1>


<a href="home">{{__('home.home')}}</a>
<br>
<a href="about">{{__('home.about')}}</a>
<br>
<a href="contact">{{__('home.contact')}}</a>