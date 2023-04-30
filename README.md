
# PHP Barcode Generator

It helps to generate a Barcode


Suports following type
QRCode
EAN8
EAN13
Code39
Code128
UPCA






## Features

- QRCode
- EAN8
- EAN13
- Code39
- Code128
- UPCA






## Run Locally

Clone the project

```bash
  git clone git@github.com:sthpratik/PHPBarcodeGenerator.git
```

Go to the project directory

```bash
  cd PHPBarcodeGenerator
```

Build container

```bash
  docker build -t phpbarcodegenerator .
```

Start the server

```bash
  docker compose up -d
```

Access it on port 3080
```bash
  http://localhost:3080/?type=QRCode&data=https://www.etsy.com/shop/CreateGiftStudio
```

## Deployment

To deploy this project run

```bash
docker stack deploy -c docker-compose.deploy.yml barcode  
```

This pulls the container from the [dockerhub](https://hub.docker.com/layers/sthpratik/phpbarcodegenerator/latest/images/sha256-e8e0e299d7518e4d846df1aba06a68cf72e7f74cb19c5dc3b29b67fb93c1a344?context=repo)
## API Reference



```http
  GET /?type=EAN8&data=123456
```
```http
  GET /?type=EAN13&data=123456
```
```http
  GET /?type=Code39&data=123456&level=L&size=10
```

```http
  GET /?type=QRCode&data=QRCode
``` 
| Parameter | Type     | Description                | Values |Default|
| :-------- | :------- | :------------------------- | :------| :-----|
| `type` | `string` | **Not Required**. Barcrode Type|QRCode/EAN8/EAN13/Code39/Code128/UPCA|QRCode|
| `data` | `string` | **Required**. Data for barcode | Text/Number for Barcode|http://softechpro.co|
| `level` | `string` | **Not Required**. Used for QRCod |'L','M','Q','H'|L|
| `size` | `string` | **Not Required**. QRCode Image size |1-10|4|




## 🚀 About Me
I'm a full stack developer...


## 🔗 Links
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/pratikshrestha/)



## Related

This is based on the library PHPQRCOde

[PHPQRCode](https://phpqrcode.sourceforge.net/)

