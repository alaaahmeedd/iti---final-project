@extends ('layouts.guest')
@extends ('layouts.parent')
@extends ('layouts.teacher')
@extends ('layouts.student')
@section('content')

<style>

p{
  font-size: 16px;
  font-family: 'Open Sans', sans-serif;
}
</style>

<header id="head" class="secondary">
        <div class="container">
                <h1 style="margin-top: 40px;">Parental View</h1>
                
            </div>
</header>
<br>
<br>
<br>

<div class=" container">
<div class="row">
<div class="col-xs-6">
	<p>As the parent of an Online School student, you’ll notice the benefits of our online model immediately.
         Along with the standard academic subjects, your student will strengthen his or her time management abilities,
          personal standards, and self-discipline skills. You’ll find that your student will be both prepared for life
           post-high school and, if applicable, pre-college while also pursuing his or her own personal interests.</p>

           <p>As a parent you can follow up your child progress report with your <a href="">Email</a> from your home, when you login with your email you will get all your child's subject names,degrees and his progress in every task on it.</p>
           <br>
           <br>
</div>
<div class="col-lg-6">
    <img src="\assets\images\progress.jpg" style="width:100%;">
  </div>
</div>
</div>
    
@endsection