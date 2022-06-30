#include <HTTPClient.h>
#include <WiFi.h>
#include <iostream>
#include <iomanip>
#include <ctime>

const char* ssid = "Redmi 9";
const char* password =  "123456789";

//Datos de Prueba para enviar

void setup() {
  delay(10);
  Serial.begin(115200);

  //Conexión a internet.
  WiFi.begin(ssid, password);
  Serial.print("Conectando...");
  while (WiFi.status() != WL_CONNECTED) { //Check for the connection
    delay(500);
    Serial.print(".");
  }
  Serial.print("Conectado con éxito, mi IP es: ");
  Serial.println(WiFi.localIP());
}

void loop() {

  if(WiFi.status()== WL_CONNECTED){   //Check WiFi connection status

    int temperatura = 51;
    int humedad_aire = 52;
    int humedad_tierra = 53;
    int porcentaje_agua = 100;
    String aux="a";







    //POST de datos.
    
    HTTPClient http;
    String datos_a_enviar = "?aux=" + aux + "&temperatura=" + temperatura + "&humedad_aire=" + humedad_aire + "&humedad_tierra=" + humedad_tierra + "&porcentaje_agua=" + porcentaje_agua;
    //Ruta de destino.
    http.begin("https://iotinvernadero.herokuapp.com/insertar.php"+datos_a_enviar);    //Indicamos el destino
    int codigo_respuesta = http.POST(datos_a_enviar);   //Enviamos el post pasándole, los datos que queremos enviar.
    Serial.println("Código HTTP ► " + String(codigo_respuesta));
    Serial.println(http.getString());
    http.end();

  }else{
     Serial.println("Error en la conexión WIFI");
  }
   delay(30000);
}
