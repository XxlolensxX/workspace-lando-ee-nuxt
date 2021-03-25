//crear certificados
## https://docs.lando.dev/config/security.html#trusting-the-ca

//MAC
$ sudo security add-trusted-cert -d -r trustRoot -k /Library/Keychains/System.keychain ~/.lando/certs/lndo.site.pem

//WINDOWS
$ certutil -addstore -f "ROOT" C:\Users\ME\.lando\certs\lndo.site.pem


$ lando start
$ cd front
$ lando npm install -g @vue/cli
$ lando npm i -g @vue/init

//comprobar si se instalod vue-cli
$ lando vue --version

//crear proyecto
$ lando vue init webpack front

$cd front
$ lando npm run dev


// evolucionando 
lando back -> instalaria el back (decarga ee / configura el archivo config con las credenciales)
lando front -> instala node / vue-cli / vue-init / crea vue con webpack
lando start-dev -> deberia levantar el vue



//cosas 

este no anda --> npm install -g @vue/cli
use este --> npm i -g @vue/cli-init