# Demo Project for psalm/laravel-psalm-plugin/issues/21

## The bug

As described- `Auth::login()` requires the parameter to be of type `Illuminate\Contracts\Auth\Authenticatable`.

This happens even if we pass in an object which `implements` `...\Authenticatable`

## To reproduce
1. Setup project with `composer install`
2. Run the following command:

```
./vendor/bin/psalm --show-info=false app/Http/Controllers/Controller.php
```

3. See below output
```

ERROR: InvalidArgument - app/Http/Controllers/Controller.php:17:21 - Argument 1 of Auth::login expects Illuminate\Contracts\Auth\Authenticatable, App\User provided
        Auth::login($user);


------------------------------
1 errors found
------------------------------
1 other issues found.
------------------------------
```

## Relevant Files

app/Http/Controllers/Controller.php@myMethod triggers the error
app/User.php `implements` the required type
