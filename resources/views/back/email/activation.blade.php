Hi, {{ $user->prenom }} {{ $user->nom }}

Please active your account : {{ url('membres/activation', $code)}}