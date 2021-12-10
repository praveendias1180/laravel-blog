# MySQL DB
```
docker compose -f docker/docker-compose.yml up --build 
```

# Debugging PHP in the Browser

## Fixing the n+1 Problem

Meet [Clockwork](https://github.com/itsgoingd/clockwork)

![debugging](public/debugging-in-the-console.gif)

## Solution

From
```
'posts' => Post::all()
```
To
```
'posts' => Post::with('category')->get()
```

![n+1](public/n-plus-one.png)