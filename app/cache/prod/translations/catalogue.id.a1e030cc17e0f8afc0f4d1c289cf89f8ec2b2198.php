<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('id', array (
  'validators' => 
  array (
    'This value should be false.' => 'Nilai ini harus bernilai salah.',
    'This value should be true.' => 'Nilai ini harus bernilai benar.',
    'This value should be of type {{ type }}.' => 'Nilai ini harus bertipe {{ type }}.',
    'This value should be blank.' => 'Nilai ini harus kosong.',
    'The value you selected is not a valid choice.' => 'Nilai yang dipilih tidak tepat.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Anda harus memilih paling tidak {{ limit }} pilihan.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Anda harus memilih paling banyak {{ limit }} pilihan.',
    'One or more of the given values is invalid.' => 'Satu atau lebih nilai yang diberikan tidak sah.',
    'This field was not expected.' => 'Ruas ini tidak diharapkan.',
    'This field is missing.' => 'Ruas ini hilang.',
    'This value is not a valid date.' => 'Nilai ini bukan merupakan tanggal yang sah.',
    'This value is not a valid datetime.' => 'Nilai ini bukan merupakan tanggal dan waktu yang sah.',
    'This value is not a valid email address.' => 'Nilai ini bukan alamat surel yang sah.',
    'The file could not be found.' => 'Berkas tidak dapat ditemukan.',
    'The file is not readable.' => 'Berkas tidak dapat dibaca.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ukuran berkas terlalu besar ({{ size }} {{ suffix }}). Ukuran maksimum yang diizinkan adalah {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Jenis berkas ({{ type }}) tidak sah. Jenis berkas yang diizinkan adalah {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Nilai ini harus {{ limit }} atau kurang.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Nilai ini terlalu panjang. Seharusnya {{ limit }} karakter atau kurang.',
    'This value should be {{ limit }} or more.' => 'Nilai ini harus {{ limit }} atau lebih.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Nilai ini terlalu pendek. Seharusnya {{ limit }} karakter atau lebih.',
    'This value should not be blank.' => 'Nilai ini tidak boleh kosong.',
    'This value should not be null.' => 'Nilai ini tidak boleh \'null\'.',
    'This value should be null.' => 'Nilai ini harus \'null\'.',
    'This value is not valid.' => 'Nilai ini tidak sah.',
    'This value is not a valid time.' => 'Nilai ini bukan merupakan waktu yang sah.',
    'This value is not a valid URL.' => 'Nilai ini bukan URL yang sah.',
    'The two values should be equal.' => 'Isi keduanya harus sama.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ukuran berkas terlalu besar. Ukuran maksimum yang diizinkan adalah {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Ukuran berkas terlalu besar.',
    'The file could not be uploaded.' => 'Berkas tidak dapat diunggah.',
    'This value should be a valid number.' => 'Nilai ini harus angka yang sah.',
    'This file is not a valid image.' => 'Berkas ini tidak termasuk citra.',
    'This is not a valid IP address.' => 'Ini bukan alamat IP yang sah.',
    'This value is not a valid language.' => 'Nilai ini bukan bahasa yang sah.',
    'This value is not a valid locale.' => 'Nilai ini bukan lokal yang sah.',
    'This value is not a valid country.' => 'Nilai ini bukan negara yang sah.',
    'This value is already used.' => 'Nilai ini sudah digunakan.',
    'The size of the image could not be detected.' => 'Ukuran dari citra tidak bisa dideteksi.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Lebar citra terlalu besar ({{ width }}px). Ukuran lebar maksimum adalah {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Lebar citra terlalu kecil ({{ width }}px). Ukuran lebar minimum yang diharapkan adalah {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Tinggi citra terlalu besar ({{ height }}px). Ukuran tinggi maksimum adalah {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Tinggi citra terlalu kecil ({{ height }}px). Ukuran tinggi minimum yang diharapkan adalah {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Nilai ini harus kata sandi pengguna saat ini.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Nilai ini harus memiliki tepat {{ limit }} karakter.',
    'The file was only partially uploaded.' => 'Berkas hanya terunggah sebagian.',
    'No file was uploaded.' => 'Tidak ada berkas terunggah.',
    'No temporary folder was configured in php.ini.' => 'Direktori sementara tidak dikonfiguasi pada php.ini.',
    'Cannot write temporary file to disk.' => 'Tidak dapat menuliskan berkas sementara ke dalam media penyimpanan.',
    'A PHP extension caused the upload to fail.' => 'Sebuah ekstensi PHP menyebabkan kegagalan unggah.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Kumpulan ini harus memiliki {{ limit }} elemen atau lebih.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Kumpulan ini harus memiliki kurang dari {{ limit }} elemen.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Kumpulan ini harus memiliki tepat {{ limit }} elemen.',
    'Invalid card number.' => 'Nomor kartu tidak sah.',
    'Unsupported card type or invalid card number.' => 'Jenis kartu tidak didukung atau nomor kartu tidak sah.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ini bukan Nomor Rekening Bank Internasional (IBAN) yang sah.',
    'This value is not a valid ISBN-10.' => 'Nilai ini bukan ISBN-10 yang sah.',
    'This value is not a valid ISBN-13.' => 'Nilai ini bukan ISBN-13 yang sah.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Nilai ini bukan ISBN-10 maupun ISBN-13 yang sah.',
    'This value is not a valid ISSN.' => 'Nilai ini bukan ISSN yang sah.',
    'This value is not a valid currency.' => 'Nilai ini bukan mata uang yang sah.',
    'This value should be equal to {{ compared_value }}.' => 'Nilai ini seharusnya sama dengan {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Nilai ini seharusnya lebih dari {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Nilai ini seharusnya lebih dari atau sama dengan {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Nilai ini seharusnya identik dengan {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Nilai ini seharusnya kurang dari {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Nilai ini seharusnya kurang dari atau sama dengan {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Nilai ini seharusnya tidak sama dengan {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Nilai ini seharusnya tidak identik dengan {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Rasio citra terlalu besar ({{ ratio }}). Rasio maksimum yang diizinkan adalah {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Rasio citra terlalu kecil ({{ ratio }}). Rasio minimum yang diharapkan adalah {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Citra persegi ({{ width }}x{{ height }}px). Citra persegi tidak diizinkan.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Citra berorientasi lanskap ({{ width }}x{{ height }}px). Citra berorientasi lanskap tidak diizinkan.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Citra berorientasi potret ({{ width }}x{{ height }}px). Citra berorientasi potret tidak diizinkan.',
    'An empty file is not allowed.' => 'Berkas kosong tidak diizinkan.',
    'The host could not be resolved.' => 'Host tidak dapat diselesaikan.',
    'This value does not match the expected {{ charset }} charset.' => 'Nilai ini tidak memenuhi set karakter {{ charset }} yang diharapkan.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ini bukan Business Identifier Code (BIC) yang sah.',
    'This form should not contain extra fields.' => 'Gabungan kolom tidak boleh mengandung kolom tambahan.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Berkas yang di unggah terlalu besar. Silahkan coba unggah berkas yang lebih kecil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-Token tidak sah. Silahkan coba kirim ulang formulir.',
    'fos_user.username.already_used' => 'Nama pengguna telah digunakan.',
    'fos_user.username.blank' => 'Masukkan nama pengguna.',
    'fos_user.username.short' => 'Nama pengguna terlalu pendek.',
    'fos_user.username.long' => 'Nama pengguna terlalu panjang.',
    'fos_user.email.already_used' => 'Surel telah digunakan.',
    'fos_user.email.blank' => 'Masukkan alamat surel.',
    'fos_user.email.short' => 'Alamat surel terlalu pendek.',
    'fos_user.email.long' => 'Alamat surel terlalu panjang.',
    'fos_user.email.invalid' => 'Alamat surel salah.',
    'fos_user.password.blank' => 'Masukkan kata sandi.',
    'fos_user.password.short' => 'Kata sandi terlalu pendek.',
    'fos_user.password.mismatch' => 'kata sandi yang anda masukkan tidak sama.',
    'fos_user.new_password.blank' => 'Masukkan kata sandi baru.',
    'fos_user.new_password.short' => 'Kata sandi baru anda terlalu pendek.',
    'fos_user.current_password.invalid' => 'Kata sandi yang anda masukkan salah.',
    'fos_user.group.blank' => 'Masukkan nama.',
    'fos_user.group.short' => 'Nama terlalu pendek.',
    'fos_user.group.long' => 'Nama terlalu panjang.',
    'fos_group.name.already_used' => 'Nama telah digunakan.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Terjadi sebuah pengecualian otentikasi.',
    'Authentication credentials could not be found.' => 'Kredensial otentikasi tidak bisa ditemukan.',
    'Authentication request could not be processed due to a system problem.' => 'Permintaan otentikasi tidak bisa diproses karena masalah sistem.',
    'Invalid credentials.' => 'Kredensial salah.',
    'Cookie has already been used by someone else.' => 'Cookie sudah digunakan oleh orang lain.',
    'Not privileged to request the resource.' => 'Tidak berhak untuk meminta sumber daya.',
    'Invalid CSRF token.' => 'Token CSRF salah.',
    'Digest nonce has expired.' => 'Digest nonce telah berakhir.',
    'No authentication provider found to support the authentication token.' => 'Tidak ditemukan penyedia otentikasi untuk mendukung token otentikasi.',
    'No session available, it either timed out or cookies are not enabled.' => 'Tidak ada sesi yang tersedia, mungkin waktu sudah habis atau cookie tidak diaktifkan',
    'No token could be found.' => 'Tidak ada token yang bisa ditemukan.',
    'Username could not be found.' => 'Username tidak bisa ditemukan.',
    'Account has expired.' => 'Akun telah berakhir.',
    'Credentials have expired.' => 'Kredensial telah berakhir.',
    'Account is disabled.' => 'Akun dinonaktifkan.',
    'Account is locked.' => 'Akun terkunci.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Memperbaharui Grup',
    'group.show.name' => 'Nama Grup',
    'group.new.submit' => 'Buat Grup',
    'group.flash.updated' => 'Grup telah berhasil diperbaharui.',
    'group.flash.created' => 'Grup telah berhasil ditambahkan.',
    'group.flash.deleted' => 'Grup telah berhasil dihapus.',
    'security.login.username' => 'Nama Pengguna',
    'security.login.password' => 'Kata sandi',
    'security.login.remember_me' => 'Ingat saya',
    'security.login.submit' => 'Masuk',
    'profile.show.username' => 'Nama Pengguna',
    'profile.show.email' => 'Surel',
    'profile.edit.submit' => 'Perbaharui',
    'profile.flash.updated' => 'Profil telah berhasil diperbaharui',
    'change_password.submit' => 'Ubah kata sandi',
    'change_password.flash.success' => 'Kata sandi telah berhasil diubah.',
    'registration.check_email' => 'Sebuah surel telah berhasil dikirimkan ke %email%. Anda harus mengklik tautan aktivasi di dalam surel tersebut untuk mengaktifkan akun anda.',
    'registration.confirmed' => 'Selamat %username%, akun anda telah berhasil diaktifkan.',
    'registration.back' => 'Kembali ke halaman sebelumnya.',
    'registration.submit' => 'Daftar',
    'registration.flash.user_created' => 'Pengguna telah berhasil ditambahkan.',
    'registration.email.subject' => 'Selamat datang %username%!',
    'registration.email.message' => 'Hallo %username%!

Untuk menyelesaikan aktifasi akun anda, mohon kunjungi halaman berikut %confirmationUrl%

Tautan ini hanya bisa digunakan sekali untuk akun anda.

Hormat Kami,
Tim Website.
',
    'resetting.check_email' => 'Sebuah surel telah dikirim. Anda harus mengklik tautan di dalam email tersebut agar dapat menata ulang kata sandi anda.
Catatan: Anda hanya bisa meminta kata sandi baru dalam %tokenLifetime% jam.

Apabila anda tidak menerima surel, cek spam atau ulangi kembali
',
    'resetting.request.username' => 'Nama pengguna atau alamat surel',
    'resetting.request.submit' => 'Tata ulang kata sandi',
    'resetting.reset.submit' => 'Ubah kata sandi',
    'resetting.flash.success' => 'Kata sandi telah berhasil ditata ulang.',
    'resetting.email.subject' => 'Tata ulang kata sandi',
    'resetting.email.message' => 'Halo %username%!

Untuk menata kata sandi anda mohon kunjungi halaman berikut %confirmationUrl%

Hormat Kami,
Tim Website.
',
    'layout.logout' => 'Keluar',
    'layout.login' => 'Masuk',
    'layout.register' => 'Pendaftaran',
    'layout.logged_in_as' => 'Masuk sebagai %username%',
    'form.group_name' => 'Nama Grup',
    'form.username' => 'Nama Pengguna',
    'form.email' => 'Surel',
    'form.current_password' => 'Kata sandi saat ini',
    'form.password' => 'Kata sandi',
    'form.password_confirmation' => 'Ulangi kata sandi',
    'form.new_password' => 'Kata sandi Baru',
    'form.new_password_confirmation' => 'Ulangi kata sandi baru',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso.',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario.',
    'fos_user.username.short' => 'El nombre de usuario es demasiado corto.',
    'fos_user.username.long' => 'El nombre de usuario es demasiado largo.',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso.',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo.',
    'fos_user.email.short' => 'La dirección de correo es demasiado corta.',
    'fos_user.email.long' => 'La dirección de correo es demasiado larga.',
    'fos_user.email.invalid' => 'La dirección de correo no es válida.',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña.',
    'fos_user.password.short' => 'La contraseña es demasiado corta.',
    'fos_user.password.mismatch' => 'Las dos contraseñas no coinciden.',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña.',
    'fos_user.new_password.short' => 'La nueva contraseña es demasiado corta.',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida.',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre.',
    'fos_user.group.short' => 'El nombre es demasiado corto.',
    'fos_user.group.long' => 'El nombre es demasiado largo.',
    'fos_group.name.already_used' => 'El nombre ya está en uso.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Anterior',
    'label_next' => 'Siguiente',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado.',
    'group.flash.created' => 'El grupo ha sido creado.',
    'group.flash.deleted' => 'El grupo ha sido borrado.',
    'security.login.username' => 'Nombre de usuario',
    'security.login.password' => 'Contraseña',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado.',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'registration.check_email' => 'Se ha enviado un email a %email%. Contiene un enlace de activación que debes presionar para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente.',
    'registration.email.subject' => 'Bienvenido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completar la validación de tu cuenta - por favor visita %confirmationUrl%

Este enlace sólo puede utilizarse una vez para validar tu cuenta.

Atentamente,
el Equipo.
',
    'resetting.check_email' => 'Un email ha sido enviado. Contiene un enlace de activación que debes presionar para restablecer tu contraseña.
 Nota: Solo se puede solicitar una nueva contraseña dentro %tokenLifetime% horas.

Si no recibe un correo electrónico, comprueba tu carpeta de correo no deseado o inténtelo de nuevo.
',
    'resetting.request.username' => 'Nombre de usuario o correo electrónico',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'resetting.email.subject' => 'Restablecer Contraseña',
    'resetting.email.message' => 'Hola %username%!

Para restablecer tu contraseña - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo',
    'form.username' => 'Nombre de usuario',
    'form.email' => 'Email',
    'form.current_password' => 'Contraseña actual',
    'form.password' => 'Contraseña',
    'form.password_confirmation' => 'Repita la contraseña',
    'form.new_password' => 'Nueva contraseña',
    'form.new_password_confirmation' => 'Repita la contraseña',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
