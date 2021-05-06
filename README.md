# httpinfo

PHP webserver that prints os information and HTTP request.



## Usage

```console
❯ docker run -d -p80:80 --name httpinfo thenaim/httpinfo

❯ curl "http://localhost/"
PAGE: serving HOME
HOST NAME: 4549469469c4
HOST IP: 172.17.0.2
REMOTE IP: 172.17.0.1
SERVER PORT: 80
REMOTE_PORT: 52870
PROTOCOL: HTTP/1.1
USER AGENT: curl/7.68.0
REQUEST TIME: 1620313035
REQUEST URI: /
HTTP_ACCEPT: */*
```





## Paths

- `localhost/dog` 
- `localhost/cat` 
- `localhost/bird` 
- `localhost/admin` 