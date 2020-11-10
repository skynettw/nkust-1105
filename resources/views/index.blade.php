<!DOCTYPE html>
<html>
<head> 
</head>
<body>
<h2>唐詩300首</h2>

<!-- @forelse ($poem as $p)
    <p>{{$p->title}}</p>
@empty -->
    <!-- <p>沒有任何詩作</p>
@endforelse -->
<hr>
@forelse ($authors as $author)
    <p>{{$author->name}}</p>
    @forelse ($author->fetchall as $titles)
        <ul>
            <li>{{$titles->title}}</li>
        </ul>
    @empty
        <p>沒有任何詩作</p>
    @endforelse
    <hr>
@empty
<p>沒有任何作者</p>
@endforelse
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyC-G28sM3cj8CqSJbTLYR4B_x2hv_nH1Wc",
    authDomain: "nkust-laravel-1105.firebaseapp.com",
    databaseURL: "https://nkust-laravel-1105.firebaseio.com",
    projectId: "nkust-laravel-1105",
    storageBucket: "nkust-laravel-1105.appspot.com",
    messagingSenderId: "449101724230",
    appId: "1:449101724230:web:552cfaf9fb27bedbdfe847"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>
</body>
</html>