#include <HTTPClient.h>
#include <WiFi.h>
#include <iostream>
#include <iomanip>
#include <ctime>

const char* ssid = "Redmi 9";
const char* password =  "123456789";

//Variables ultrasonido
const int Trigger = 26;
const int Echo= 25;
float Distancia, Duracion, Volumen, Porcentaje;

//Variables humedad de tierra
const int sensorYL = 27;


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

  //Ultrasonido
  pinMode(Trigger, OUTPUT);
  pinMode(Echo, INPUT);
}

void loop() {

  if(WiFi.status()== WL_CONNECTED){   //Check WiFi connection status

    float temperatura = 0;
    float humedad_aire = 0;
    float humedad_tierra = 0;
    int porcentaje_agua = 0;
    String aux="a";


    //Lectura sensor de ultrasonido
    digitalWrite(Trigger, HIGH);
    delay(1);
    digitalWrite(Trigger,LOW);
    Duracion = pulseIn(Echo,HIGH);
    Distancia = Duracion/58.2;
    //1.44 es el radio
    Volumen = (320-Distancia)*1*0.031416;
    Porcentaje = (Volumen * 100)/9.4248;
    
    porcentaje_agua = Porcentaje;
    

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
   delay(60000);
}
