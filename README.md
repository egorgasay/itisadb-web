# itisadb-web - Web application for easy interaction with ![itisadb](https://github.com/egorgasay/itisadb)

### ❓ What is ![itisadb](https://github.com/egorgasay/itisadb)?
This is a system consisting of several microservices (Memory Balancer, Storage, WebApplication), which is a distributed key-value database. There can be an unlimited number of Storage instances, they are all connected to the Memory Balancer via gRPC, which distributes the load between them. You can connect to the Web Application (Echo) via the Web interface to enter the necessary data manually. The system is fault-tolerant, guarantees complete data recovery even after a power outage.
<p align="center" >
<img src="https://user-images.githubusercontent.com/102957432/234682767-c21f9dcc-acfc-4e7b-a23f-5e213b75c606.png"  width="1000" />
</p>

### 🔍️ Purpose 
With the help of itisadb-web, you can quickly enter and receive information from the database.

### 📝 Todo
- 👀 Better frontend
- 👉 Index support

### ⚙️ Installation
```bash
git clone https://github.com/egorgasay/itisadb-web
cd itisadb-web
composer update
composer install
php artisan serve --host 0.0.0.0 --port 8000
```

### 👀 First look:
![изображение](https://github.com/egorgasay/grpcis-web/assets/102957432/fa2ca4e0-a98a-4f76-9823-53972aee4da7)
