.\cake
## dentro da pasta bin
.\cake bake all post


## simples em portugues
https://www.youtube.com/watch?v=NrIvj8I0dOY&t=477s



## configuração bd

'username' => 'root',
'password' => '',
'database' => 'project',
'encoding' => 'utf8mb4',
'timezone' => 'UTC',
'flags' => [],
'cacheMetadata' => true,
'log' => false,

# Comandos


bin/cake migrations create CreateUserTable
bin/cake migrations migrate
