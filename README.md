
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
| `data` | `string` | **Required**. Data for barcode | Text/Number for Barcode||
| `level` | `string` | **Not Required**. Used for QRCod |'L','M','Q','H'|L|
| `size` | `string` | **Not Required**. QRCode Image size |1-10|4|




## 🚀 About Me
I'm a full stack developer...


## 🔗 Links
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/pratikshrestha/)


