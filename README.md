# PSI-2021ge-01 Marves Prime
Please read [RULES.md](RULES.md).

## General Description
Marves Prime is a website that is used to monitor the performance and progress of each Work Program implemented by Menko Marves. 

## Features
1. Dashboard on each user (especially Menko Marves) to see how well each Deputy's job is progressing.
2. Simple table and attractive colors for status category.
3. Create, Read, Update, and Delete features for Program/Isu, Renaksi, Turunan Renaksi, and Kegiatan.
4. Notification for Eselon 1 for Rakor which allows Eselon 1 to update the detail of rakor (includes the presentation file) over time.
5. Notification for Eselon 1 which contains the notes from user Persidangan.
6. Admin pages to manage Marves users.

## Architectural Design
![WhatsApp Image 2021-06-15 at 11 44 54](https://user-images.githubusercontent.com/70925629/121994301-3c635800-cdcf-11eb-9708-26152a3ab59b.jpeg)



## Database Design
![image](https://user-images.githubusercontent.com/60694238/121991504-f788f280-cdc9-11eb-8ccf-a13b6fb7393c.png)




## Installation Guide
Clone the repo
```
git clone https://github.com/proyek-mahasiswa/psi-2021ge-01-marves-prime.git
```

Move to the newly created folder and install all dependencies:
```
composer install
```

Create a new database, for example with phpMyAdmin. Then open the .env.example file, edit it to match your database name, username and password and save it as .env file. Once done, build tables with the following command:
```
php artisan migrate
```

Now fill the tables:
```
php artisan db:seed
```

Finally, generate the application key 
```
php artisan key:generate
```

Open your favorite browser and visit the newly created app by writing these 
```
php artisan serve
```


### Minimum Hardware Requirements
Here's the minimum hardware requirements for the project:
1. Processor: Intell(R) Core(TM ) i5 CPU @2.10GHz
2. RAM: 8.00 GB
3. Processor architectures: 64-bit Operating System

### Minimum Software Requirements
Here's the minimum software requirements for the project:
1. PHP version >= 7.3+
2. Composer
3. Laravel Framework 8.3+
4. MySQL dan SQLyog

# Contributors
1. 12S18026 - Yohanes Ray Febriyanto Silitonga (@yohanesray21)
2. 12S18037 - Andika Meidy Fransius Tarigan (@Andika-MFT)
3. 12S18038 - Naomi Anastasya Simatupang (@naomiachoo)
4. 12S18043 - Roy Gunawan Napitupulu (@Sublime18)
5. 12S18047 - Ulion Alberto Perkasa Pardede (@ulion-debug)
6. 12S18051 - Cindy Juniati Hutapea (@cindyjuniati)
7. 12S18054 - Erika Natalia Simaremare (@erikanataliasimaremare)
