# DOKUMENTASI PENJELASAN FLOWCHART 
**DevFlow – Development Workflow Management System**
**PT MAINTEK JUARA INTISOLUSI**

======================================================

1. Judul Flowchart

FC-01 – Master Workflow SDLC

------------------------------------------------------

2. Tujuan Flowchart

Flowchart ini bertujuan untuk memberikan gambaran besar (helicopter view) mengenai keseluruhan proses Software Development Life Cycle (SDLC) yang berjalan pada aplikasi DevFlow. Proses ini memetakan seluruh perjalanan sebuah proyek pengembangan perangkat lunak mulai dari permintaan awal klien hingga penutupan proyek dan pelaporan.

------------------------------------------------------

3. Aktor yang Terlibat

- Client
- Project Manager
- Team Leader
- Senior Developer
- Developer
- QA Engineer
- DevOps Engineer
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Client mengajukan permintaan (Client Request) ke sistem.
3. Project Manager melakukan Requirement Analysis.
4. Dilakukan tahap Project Approval.
5. Sistem mengarahkan ke Connector A.
6. Dari Connector A, berlanjut ke tahap Create Project.
7. Project Manager melakukan Sprint Planning.
8. Melakukan Assign Team (mengalokasikan tim).
9. Membuat Task (Create Task).
10. Developer memulai proses Development.
11. Sistem mengarahkan ke Connector B.
12. Dari Connector B, masuk ke tahap Code Review.
13. Tim QA melakukan QA Testing.
14. Aplikasi dirilis melalui proses Deployment.
15. Dilakukan proses Monitoring paska rilis.
16. Sistem mengarahkan ke Connector C.
17. Dari Connector C, Client melakukan Client Approval.
18. Jika disetujui, proyek ditutup (Project Closed).
19. Sistem membuat laporan (Generate Report).
20. Proses SDLC selesai (End).

------------------------------------------------------

5. Decision

Pada Master Workflow ini, detail Decision dialihkan ke flowchart masing-masing modul untuk menjaga keterbacaan, namun secara logika sistem melalui validasi kualitas dan persetujuan secara bertahap. (Lihat FC-09, FC-10, dan FC-16 untuk detail decision).

------------------------------------------------------

6. Database yang Digunakan

- Project Database: Menyimpan data utama proyek dan status SDLC.
- Report Database: Digunakan untuk menyimpan hasil *Generate Report*.
- Activity Log: Mencatat transisi setiap fase proyek.

------------------------------------------------------

7. Input

- Client Request Data
- Requirement Document
- Project Configuration

------------------------------------------------------

8. Output

- Laporan Akhir (Report)
- Status Project Closed
- Aplikasi yang Dideploy (Live)

------------------------------------------------------

9. Kesimpulan

Flowchart FC-01 berfungsi sebagai peta panduan utama yang merangkum keseluruhan ekosistem DevFlow. Modul ini memastikan bahwa standar manajemen proyek perusahaan berjalan dengan disiplin yang ketat dan semua fase SDLC tidak ada yang terlewatkan.

======================================================

1. Judul Flowchart

FC-02 – Login & Authentication

------------------------------------------------------

2. Tujuan Flowchart

Flowchart ini bertujuan untuk memberikan lapisan keamanan dalam memastikan bahwa hanya aktor atau pengguna yang memiliki akses sah (terotentikasi dan tervalidasi) yang dapat masuk ke dalam sistem DevFlow, serta mengarahkan mereka ke tampilan yang sesuai dengan otorisasi jabatannya.

------------------------------------------------------

3. Aktor yang Terlibat

- Semua User (Client, Admin, HRD, PM, Dev, QA, Mahasiswa Magang, DevOps)
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. User menginputkan Username.
3. User menginputkan Password.
4. Sistem menjalankan proses Login.
5. Sistem melakukan Validasi User ke dalam User Database.
6. Evaluasi Decision: Apakah Login Valid?
7. Jika tidak valid, proses kembali ke Input Username.
8. Jika valid, sistem melanjutkan ke tahap OTP Verification.
9. Evaluasi Decision: Apakah OTP Valid?
10. Jika tidak valid, kembali ke OTP Verification.
11. Jika valid, sistem memuat Dashboard berdasarkan Role user.
12. Setelah selesai menggunakan sistem, user melakukan Logout.
13. Proses selesai (End).

------------------------------------------------------

5. Decision

Decision 1
Login Valid?
YES: Lanjut ke OTP Verification.
NO: Kembali ke Input Username (Pesan Error).

Decision 2
OTP Valid?
YES: Lanjut ke Dashboard berdasarkan Role.
NO: Kembali ke OTP Verification.

------------------------------------------------------

6. Database yang Digunakan

- User Database: Untuk memvalidasi kredensial (username & password) serta profil Role pengguna.
- Activity Log: Menyimpan waktu login dan percobaan login yang gagal.

------------------------------------------------------

7. Input

- Username
- Password
- Kode OTP

------------------------------------------------------

8. Output

- Dashboard Sesuai Role
- Sesi (Session) Pengguna
- Pesan Error (jika gagal)

------------------------------------------------------

9. Kesimpulan

Flowchart Login & Authentication memastikan sistem DevFlow memiliki lapisan otentikasi ganda (2FA/OTP) untuk melindungi data sensitif perusahaan, serta memberikan kontrol akses yang tepat ke berbagai modul manajemen proyek sesuai dengan hak akses masing-masing pengguna.

======================================================

1. Judul Flowchart

FC-03 – Dashboard

------------------------------------------------------

2. Tujuan Flowchart

Tujuan flowchart ini adalah untuk menggambarkan proses inisialisasi dan penyajian data statistik operasional pada halaman utama (dashboard) pengguna setelah mereka berhasil login. Dashboard menyajikan rangkuman cepat tentang progress proyek, sprint, hingga deadline.

------------------------------------------------------

3. Aktor yang Terlibat

- Semua User
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. User berhasil Login.
3. Sistem memuat komponen Dashboard (Load Dashboard).
4. Sistem melakukan query untuk Ambil Data Dashboard dari berbagai modul.
5. Tampilkan Statistik Project pada layar.
6. Tampilkan Progress Sprint.
7. Tampilkan Progress Developer.
8. Tampilkan Progress Internship.
9. Tampilkan pengingat Deadline proyek/task.
10. Tampilkan Notification terbaru.
11. Tampilkan riwayat Activity Log.
12. Proses penyajian dashboard selesai (End).

------------------------------------------------------

5. Decision

(Tidak ada Decision kompleks pada modul ini, sepenuhnya merupakan proses sistematis Query & Display data).

------------------------------------------------------

6. Database yang Digunakan

- Project Database: Sumber data statistik proyek.
- Sprint & Task Database: Sumber data progress developer dan mahasiswa magang.
- Notification Database: Mengambil notifikasi terkini.
- Activity Log: Menampilkan riwayat aktivitas.

------------------------------------------------------

7. Input

- User Session (Role ID, User ID)

------------------------------------------------------

8. Output

- Tampilan Statistik Project
- Tampilan Progress & Deadline
- Tampilan Activity Log
- Tampilan Notifikasi

------------------------------------------------------

9. Kesimpulan

Dashboard berperan sebagai pusat kendali operasional sehari-hari bagi pengguna DevFlow. Dengan menampilkan informasi kritis yang telah dikompilasi secara real-time, pengguna dapat segera mengetahui tugas apa yang mendesak dan bagaimana status keseluruhan proyek perusahaan.

======================================================

1. Judul Flowchart

FC-04 – User Management

------------------------------------------------------

2. Tujuan Flowchart

Flowchart ini bertujuan untuk mendokumentasikan tata kelola manajemen akun pengguna, meliputi proses penambahan akun baru, pengaturan otorisasi hak akses (roles/permission), hingga penonaktifan akun karyawan atau mahasiswa yang sudah tidak aktif.

------------------------------------------------------

3. Aktor yang Terlibat

- Administrator
- HRD
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Admin / HRD memilih aksi Tambah User.
3. Bisa juga melakukan Edit User.
4. Sistem memproses Assign Role pada pengguna.
5. Melakukan pengaturan Permission spesifik.
6. Proses Reset Password (jika diperlukan).
7. Admin melakukan Aktivasi User agar bisa login.
8. Admin dapat memilih Nonaktifkan User bagi yang keluar/lulus.
9. Semua perubahan disimpan ke dalam Database (Simpan Database).
10. Proses selesai (End).

------------------------------------------------------

5. Decision

(Proses dikendalikan melalui pilihan menu antarmuka, setiap path dieksekusi secara linear sesuai perintah dari Admin).

------------------------------------------------------

6. Database yang Digunakan

- User Database: Tempat penyimpanan sentral untuk semua informasi profil pengguna, role, status aktif, dan password hash.

------------------------------------------------------

7. Input

- Data Profil User (Nama, Email, dll)
- Input Role & Permission
- Instruksi Reset Password

------------------------------------------------------

8. Output

- Akun User yang aktif/non-aktif
- Perubahan Role/Akses

------------------------------------------------------

9. Kesimpulan

Sistem manajemen pengguna yang kuat memastikan bahwa hanya orang yang tepat yang dapat melihat dan mengubah informasi yang tepat, menjaga integritas manajemen proyek di PT MAINTEK JUARA INTISOLUSI.

======================================================

1. Judul Flowchart

FC-05 – Project Management

------------------------------------------------------

2. Tujuan Flowchart

Flowchart ini merinci langkah-langkah inisiasi dan pendefinisian ruang lingkup sebuah proyek baru. Tujuannya adalah untuk mendokumentasikan input data dasar, pembagian tanggung jawab, penentuan estimasi waktu, dan anggaran agar proyek terdaftar resmi ke dalam sistem.

------------------------------------------------------

3. Aktor yang Terlibat

- Administrator
- Project Manager
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Admin melakukan Input Client (Data klien pemesan).
3. Melakukan Input Project (Informasi dasar proyek).
4. Menyusun Requirement atau spesifikasi proyek.
5. Mendefinisikan Timeline (Jadwal pengerjaan).
6. Memasukkan estimasi Budget proyek.
7. Admin menunjuk dan melakukan Assign Project Manager.
8. Project Manager melakukan Assign Team untuk proyek tersebut.
9. Data proyek diverifikasi dan masuk proses Simpan Project.
10. Proyek dinyatakan berjalan (Project Active).
11. Proses inisiasi proyek selesai (End).

------------------------------------------------------

5. Decision

(Validasi form bersifat preventif di level UI, alur utama bersifat linear).

------------------------------------------------------

6. Database yang Digunakan

- Project Database: Menyimpan data klien, budget, timeline, dan scope proyek.
- User Database: Digunakan saat mereferensikan PM dan anggota Tim ke proyek.

------------------------------------------------------

7. Input

- Data Klien
- Data Proyek (Nama, Deskripsi)
- Dokumen Requirement
- Timeline & Budget

------------------------------------------------------

8. Output

- Project Berstatus Active
- Notifikasi ke PM dan Tim

------------------------------------------------------

9. Kesimpulan

Modul ini adalah pondasi dari semua aktivitas di DevFlow. Tanpa manajemen inisialisasi yang terstruktur, proses pengembangan tidak dapat diukur efisiensi anggaran dan waktu tenggatnya. Flowchart ini menjamin semua parameter proyek jelas sejak hari pertama.

======================================================

1. Judul Flowchart

FC-06 – Sprint Planning

------------------------------------------------------

2. Tujuan Flowchart

Tujuan dari flowchart Sprint Planning adalah merencanakan satu siklus iterasi (Sprint) di dalam proyek Agile. Flowchart ini mengelola pembuatan Backlog, estimasi beban kerja (Story Point), hingga pengesahan sprint agar developer dapat mulai bekerja.

------------------------------------------------------

3. Aktor yang Terlibat

- Project Manager
- Team Leader
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. PM/Team Leader melakukan Create Sprint.
3. Mendefinisikan Sprint Goal yang ingin dicapai.
4. Menarik task dan menyusun Sprint Backlog.
5. Tim menentukan estimasi bobot melalui Assign Story Point.
6. Mengatur Timeline (tanggal mulai dan selesai sprint).
7. Melakukan persetujuan final (Sprint Approval).
8. Status sprint berubah menjadi Sprint Active.
9. Proses planning selesai (End).

------------------------------------------------------

5. Decision

(Alur ini berjalan sistematis sebagai bagian dari perencanaan berkala, tidak memiliki cabang decision krusial).

------------------------------------------------------

6. Database yang Digunakan

- Sprint Database: Menyimpan konfigurasi sprint, goal, dan batas waktu iterasi.
- Task Database: Untuk merelasikan daftar task (backlog) dengan sprint tertentu.

------------------------------------------------------

7. Input

- Nama Sprint & Goal
- Pemilihan Task ke Backlog
- Estimasi Story Point
- Tanggal Mulai dan Selesai

------------------------------------------------------

8. Output

- Sprint Active
- Dashboard Kanban Siap Digunakan

------------------------------------------------------

9. Kesimpulan

Dengan Sprint Planning yang divisualisasikan ini, PT MAINTEK dapat menjaga ritme pengembangan software agar selalu terukur. Beban kerja terdistribusi dengan estimasi nilai Story Point yang jelas sehingga timeline proyek utama dapat dijaga.

======================================================

1. Judul Flowchart

FC-07 – Task Management

------------------------------------------------------

2. Tujuan Flowchart

Flowchart ini memodelkan pergerakan satuan pekerjaan (Task) mulai dari pembuatan hingga penyelesaian. Ini adalah alur kerja level mikro di mana developer dan mahasiswa magang akan menghabiskan mayoritas waktunya.

------------------------------------------------------

3. Aktor yang Terlibat

- Team Leader
- Developer
- Mahasiswa Magang
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Pembuatan task baru (Create Task).
3. Team leader melakukan Assign Developer untuk mengerjakannya.
4. Atau melakukan Assign Mahasiswa Magang pada task khusus.
5. Mengatur level Prioritas (Priority).
6. Menentukan Deadline pengerjaan task.
7. Pengerjaan berjalan dan pelacakan Progress dimulai.
8. User melakukan Update Status (Todo -> In Progress -> Done).
9. Status tugas tercapai (Task Completed).
10. Proses task selesai (End).

------------------------------------------------------

5. Decision

(Validasi status task diurus secara linier di mana user memindahkan task hingga mencapai status done).

------------------------------------------------------

6. Database yang Digunakan

- Task Database: Pusat penyimpanan seluruh deskripsi task, status kanban, prioritas, serta user assignee.

------------------------------------------------------

7. Input

- Task Title & Description
- Penugasan Assignee (User ID)
- Priority Level (High/Med/Low)
- Perubahan Status Kanban

------------------------------------------------------

8. Output

- Perubahan Status Task
- Notifikasi Deadline

------------------------------------------------------

9. Kesimpulan

Task Management memastikan transparansi penuh pada setiap elemen terkecil pekerjaan. Tidak ada pekerjaan yang terlupakan dan performa individu (baik developer maupun mahasiswa) dapat dilacak secara akurat.

======================================================

1. Judul Flowchart

FC-08 – Internship Management

------------------------------------------------------

2. Tujuan Flowchart

Flowchart ini mendeskripsikan secara lengkap siklus hidup program magang, menghubungkan proses rekrutmen awal dengan dua kampus mitra, proses seleksi, pelatihan berbasis proyek (mentoring), hingga penerbitan sertifikat digital sebagai bentuk kelulusan mahasiswa.

------------------------------------------------------

3. Aktor yang Terlibat

- Mahasiswa Magang
- HRD
- Mentor (Senior Developer / Team Leader)
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Terjadi proses Registrasi Mahasiswa ke dalam sistem.
3. Mahasiswa melakukan Pilih Kampus Mitra (Mitra 1 atau Mitra 2).
4. Mahasiswa melakukan Upload Dokumen administrasi.
5. HRD memproses Verifikasi dokumen.
6. HRD melakukan Seleksi administrasi.
7. Pelaksanaan tahapan Interview.
8. Evaluasi Decision: Apakah Mahasiswa Lulus?
9. Jika tidak lulus, proses berakhir langsung (End).
10. Jika lulus, sistem mencatat proses Assign Mentor.
11. Mahasiswa mendapat tugas melalui Assign Project.
12. Mahasiswa membuat Daily Report setiap hari kerja.
13. Mentor melakukan Monitoring kinerja.
14. HRD/Mentor melaksanakan Evaluasi akhir.
15. Sistem secara otomatis menjalankan Generate Sertifikat kelulusan.
16. Proses program magang selesai (End).

------------------------------------------------------

5. Decision

Decision 1
Lulus Seleksi?
YES: Melanjutkan penempatan mentor dan proyek.
NO: Pendaftaran ditolak, proses berakhir.

------------------------------------------------------

6. Database yang Digunakan

- Internship Database: Menyimpan data universitas asal, nilai, dan dokumen legal mahasiswa.
- User Database: Untuk membuat akun mahasiswa yang lulus seleksi.

------------------------------------------------------

7. Input

- Biodata Mahasiswa
- Pemilihan Kampus
- Upload CV/Portofolio
- Laporan Harian (Daily Report)
- Nilai Evaluasi

------------------------------------------------------

8. Output

- Akun Akses Magang
- Rekapitulasi Evaluasi
- Sertifikat Digital

------------------------------------------------------

9. Kesimpulan

Integrasi Internship Management di dalam DevFlow membuktikan komitmen perusahaan dalam membina talenta muda dari kampus mitra. Sistem ini mengukur kinerja magang bukan dari absensi semata, melainkan dari kontribusi nyata pada proyek melalui laporan terstruktur.

======================================================

1. Judul Flowchart

FC-09 – Development Workflow

------------------------------------------------------

2. Tujuan Flowchart

Alur ini memetakan bagaimana kode program yang ditulis developer dikelola dan divalidasi kualitasnya sebelum digabungkan (merge). Flowchart ini memastikan bahwa seluruh source code melewati fase review yang ketat untuk menekan resiko _technical debt_.

------------------------------------------------------

3. Aktor yang Terlibat

- Developer
- Senior Developer (Reviewer)
- System / Git Engine

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Developer mulai melakukan Coding pada _local environment_.
3. Kode disimpan via Commit Git.
4. Developer melakukan Push Repository ke server git.
5. Membuat permintaan penggabungan kode (Pull Request).
6. Senior Developer memeriksa kode melalui Code Review.
7. Evaluasi Decision: Apakah kode di-Approve?
8. Jika tidak disetujui (Ditolak), proses kembali ke fase Coding.
9. Jika disetujui, dilakukan proses Merge Branch ke _main branch_.
10. Sistem memicu otomatisasi Build.
11. Alur pengembangan selesai (End).

------------------------------------------------------

5. Decision

Decision 1
Approve Code Review?
YES: Kode bebas dari cacat kritikal, lanjut ke Merge Branch.
NO: Kode dikembalikan ke Developer untuk diperbaiki (kembali ke tahap Coding).

------------------------------------------------------

6. Database yang Digunakan

- Git Repository: Tempat penyimpanan _source code_ terpusat dan manajemen versi (Version Control System).

------------------------------------------------------

7. Input

- Source Code
- Pull Request / Merge Request Form
- Feedback Reviewer

------------------------------------------------------

8. Output

- Kode ter-merge ke Branch Utama
- Pipeline Build

------------------------------------------------------

9. Kesimpulan

Flowchart ini memaksakan standar kualitas (Quality Gate) yang menjamin kode tidak sembarangan masuk ke cabang utama. Dengan kewajiban persetujuan melalui Pull Request, Senior Developer dapat memfilter *bug* dan kelemahan logika algoritma sejak fase sangat awal.

======================================================

1. Judul Flowchart

FC-10 – QA Testing

------------------------------------------------------

2. Tujuan Flowchart

Flowchart ini memaparkan alur jaminan mutu (Quality Assurance). Tujuannya adalah untuk mendeteksi kecacatan (bugs/defects) dari tahap unit terkecil hingga pengujian fungsionalitas keseluruhan sebelum diserahkan ke klien.

------------------------------------------------------

3. Aktor yang Terlibat

- QA Engineer
- Developer
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Sistem/QA menjalankan Unit Testing.
3. Melanjutkan ke tahap Integration Testing (pengujian antar modul).
4. Melakukan System Testing (pengujian keseluruhan sistem).
5. QA memandu proses User Acceptance Testing (pengujian dengan skenario real).
6. Evaluasi Decision: Apakah QA Passed (Lulus Pengujian)?
7. Jika tidak lulus (Gagal), proses dikembalikan ke Developer (biasanya masuk ke Bug Fix).
8. Jika lulus, sistem mencatat status QA Approved.
9. Proses pengujian selesai (End).

------------------------------------------------------

5. Decision

Decision 1
QA Passed?
YES: Kualitas rilis telah memenuhi standar perusahaan (QA Approved).
NO: Ditemukan kecacatan, fitur ditolak dan dikembalikan ke Developer.

------------------------------------------------------

6. Database yang Digunakan

- Task/Bug Database: Untuk melampirkan hasil skenario pengujian pada task yang relevan atau membuka tiket bug baru.

------------------------------------------------------

7. Input

- Hasil Test Scripts
- Checklist Skenario
- Laporan Anomali

------------------------------------------------------

8. Output

- Status QA Approved
- Laporan Quality Metrics

------------------------------------------------------

9. Kesimpulan

Dengan memisahkan empat lapisan pengujian (Unit, Integration, System, UAT), QA Testing memastikan aplikasi yang dihasilkan stabil secara fungsional maupun struktural. Flowchart ini mencegah kelolosan _bug_ hingga fase deployment.

======================================================

1. Judul Flowchart

FC-11 – Bug & Issue Management

------------------------------------------------------

2. Tujuan Flowchart

Mengelola pelaporan anomali (bug) secara sistematis agar dapat segera diperbaiki, diverifikasi ulang, dan ditutup dengan tepat, mencegah _bug_ berlarut-larut menjadi kendala operasional yang fatal.

------------------------------------------------------

3. Aktor yang Terlibat

- QA Engineer / Client
- Project Manager
- Developer
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Pengguna (QA/Client) melakukan Input Bug ke sistem.
3. PM / QA melakukan Validasi keabsahan bug tersebut.
4. Melakukan Assign Developer untuk ditugaskan memperbaiki.
5. Developer melakukan tindakan Bug Fix (koding perbaikan).
6. QA melakukan proses Retest atas perbaikan tersebut.
7. Evaluasi Decision: Apakah Bug Fixed (Telah Selesai)?
8. Jika belum selesai (Gagal), proses kembali ke Bug Fix oleh Developer.
9. Jika selesai, tiket anomali ditutup (Close Issue).
10. Proses manajemen bug selesai (End).

------------------------------------------------------

5. Decision

Decision 1
Bug Fixed?
YES: Perbaikan divalidasi berhasil, lanjut Close Issue.
NO: Bug masih terjadi atau menimbulkan bug baru, kembali ke tahap Bug Fix.

------------------------------------------------------

6. Database yang Digunakan

- Bug Database: Penyimpanan khusus tiket laporan _issue_, _severity_, dan langkah reproduksi masalah.

------------------------------------------------------

7. Input

- Judul & Deskripsi Error
- Langkah Reproduksi (Steps to Reproduce)
- Screenshot / Log Error

------------------------------------------------------

8. Output

- Status Tiket Bug Ditutup (Resolved)
- Notifikasi penyelesaian issue ke pelapor.

------------------------------------------------------

9. Kesimpulan

Proses berulang antara perbaikan dan verifikasi ini menjamin setiap laporan isu diselesaikan dengan tuntas, mempertahankan rasa kepercayaan klien terhadap keandalan produk yang dikembangkan oleh PT MAINTEK.

======================================================

1. Judul Flowchart

FC-12 – Deployment

------------------------------------------------------

2. Tujuan Flowchart

Flowchart ini memitigasi risiko saat merilis perangkat lunak baru ke lingkungan production (live). Proses ini menekankan pentingnya mekanisme keamanan seperti pencadangan otomatis (backup) dan ketersediaan opsi mundur (rollback).

------------------------------------------------------

3. Aktor yang Terlibat

- DevOps Engineer
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Sistem mempersiapkan Build Production.
3. Melakukan langkah preventif Backup Database sistem yang berjalan.
4. Melakukan langkah preventif Backup Source Code versi saat ini.
5. Mengeksekusi proses rilis kode (Deploy).
6. Sistem menjalankan Health Check otomatis (tes stabilitas dasar).
7. Melakukan langkah Monitoring ketersediaan sistem.
8. Evaluasi Decision: Apakah Deployment Success (Berhasil)?
9. Jika tidak berhasil (Gagal), maka sistem mengeksekusi Rollback dan mengembalikan proses ke awal untuk diperiksa.
10. Jika berhasil, sistem dinyatakan rilis (Production Online).
11. Alur perilisan selesai (End).

------------------------------------------------------

5. Decision

Decision 1
Deployment Success?
YES: Aplikasi berjalan normal pada server live, status menjadi Production Online.
NO: Terjadi galat kritis saat instalasi, memicu _Rollback_ memulihkan data dan kode dari _Backup_.

------------------------------------------------------

6. Database yang Digunakan

- Activity Log / Deployment Log: Mencatat riwayat _pipeline deployment_, waktu eksekusi, dan status _success/fail_.

------------------------------------------------------

7. Input

- Production Build Artifacts
- Environment Variables Config

------------------------------------------------------

8. Output

- _Live Application_ (Aplikasi Produksi)
- Laporan Keberhasilan Deploy / Alert Kegagalan

------------------------------------------------------

9. Kesimpulan

Flowchart Deployment menggambarkan prosedur rilis yang matang. Kewajiban backup dan Health Check sebelum aplikasi sepenuhnya diserahkan meminimalisir kemungkinan gangguan sistem atau *downtime* fatal di sisi end-user.

======================================================

1. Judul Flowchart

FC-13 – Maintenance

------------------------------------------------------

2. Tujuan Flowchart

Flowchart ini merupakan fase jangka panjang operasional pasca-rilis. Menggambarkan proses pengawasan server serta cara penanganan *error* darurat di tahap production agar sistem tetap berjalan optimal sepanjang waktu (SLA).

------------------------------------------------------

3. Aktor yang Terlibat

- DevOps / Ops Team
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Sistem dan Ops Team melakukan Monitoring harian.
3. Jika ditemukan anomali, Ops Team melakukan Analisis Error.
4. Menyiapkan dan mengembangkan perbaikan kecil (Patch).
5. Jika sangat kritis, merilis perbaikan darurat segera (Hotfix).
6. Menggabungkan patch dan mendistribusikan pembaruan (Release).
7. Melakukan siklus Monitoring lanjutan secara konstan.
8. Flowchart pemeliharaan selesai (End).

------------------------------------------------------

5. Decision

(Tidak menggunakan decision bercabang eksplisit dalam bagan ini, merupakan loop sistematis *Monitor-Fix-Release*).

------------------------------------------------------

6. Database yang Digunakan

- Bug/Issue Database: Mencatat _hotfix_ atau insiden server.
- Activity Log: Log _uptime_ server.

------------------------------------------------------

7. Input

- Server Log / Error Logs
- Laporan Downtime
- _Patching Scripts_

------------------------------------------------------

8. Output

- Server Stabil
- _Minor Update Release_

------------------------------------------------------

9. Kesimpulan

Maintenance membuktikan bahwa DevFlow adalah platform yang mendampingi produk seumur hidupnya. Siklus ini menjamin reliabilitas dan menjaga agar _bugs_ kritis di ranah produksi dapat segera diisolasi dan dirilis perbaikannya (Hotfix) tanpa mengganggu rutinitas utama.

======================================================

1. Judul Flowchart

FC-14 – Notification Center

------------------------------------------------------

2. Tujuan Flowchart

Sistem peringatan tersentralisasi ini menjamin tidak ada satupun aktor, mulai dari manajer proyek, pengembang, hingga klien, yang tertinggal informasi mengenai pembaruan status sistem, pergantian task, maupun _deadline_ krusial yang sudah mendekat.

------------------------------------------------------

3. Aktor yang Terlibat

- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Sistem mengambil _event_ dan melakukan Generate Notification.
3. Mendistribusikan pemberitahuan via Email Notification.
4. Menyebarkan pesan ke Dashboard Notification (lonceng aplikasi).
5. Mengirimkan peringatan tentang tugas via Task Notification.
6. Membunyikan pengingat batas waktu via Reminder Deadline.
7. Mendorong _push service_ (Push Notification).
8. Distribusi notifikasi selesai (End).

------------------------------------------------------

5. Decision

(Sebuah _broadcast operation_ satu-ke-banyak tanpa kondisi bersyarat antar jalurnya).

------------------------------------------------------

6. Database yang Digunakan

- Notification Database: Menyimpan data teks pesan, jenis notifikasi, dan flag apakah pesan sudah di-_read_ atau belum oleh user.

------------------------------------------------------

7. Input

- _Event Triggers_ (misal: Task Berubah Status, Komentar Baru, Mendekati Deadline)

------------------------------------------------------

8. Output

- Email Masuk
- Pesan di Lonceng Navigasi Aplikasi

------------------------------------------------------

9. Kesimpulan

Arsitektur _broadcast_ notifikasi menjamin sinkronisasi komunikasi yang proaktif. Setiap anggota tim terus _up-to-date_ dengan dinamika pengerjaan tanpa harus secara manual menanyakan progress dari bagian lain.

======================================================

1. Judul Flowchart

FC-15 – Reporting

------------------------------------------------------

2. Tujuan Flowchart

Flowchart ini memberikan visualisasi atas mekanisme ekspor data analitik untuk memuaskan kebutuhan audit, _invoicing_ kepada klien, serta bahan evaluasi performa manajemen internal terhadap jalannya proyek perangkat lunak.

------------------------------------------------------

3. Aktor yang Terlibat

- Project Manager
- HRD
- Administrator
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Sistem melakukan agregasi (Ambil Data) sesuai periode.
3. Melakukan kompilasi untuk Generate Report.
4. Menghasilkan informasi Progress Project.
5. Menghasilkan pencapaian Progress Sprint.
6. Mengukur metrik Performance Developer.
7. Mengukur metrik Performance Internship (bagi anak magang).
8. Mengonversi data ke dokumen fisik melalui Export PDF.
9. Mengonversi data ke dokumen spreedsheet melalui Export Excel.
10. Dokumen siap dicetak (Print Report).
11. Proses selesai (End).

------------------------------------------------------

5. Decision

(Proses satu arah yang difokuskan pada pengumpulan dan konversi data).

------------------------------------------------------

6. Database yang Digunakan

- Report Database / Seluruh Tabel Sistem (Read-Only Query): Query besar menggabungkan tabel Task, Project, Sprint, dan Bug untuk menarik metrik yang diperlukan.

------------------------------------------------------

7. Input

- Filter Tanggal & Filter Project (Rentang Waktu)

------------------------------------------------------

8. Output

- Dokumen Ekspor Resmi (PDF)
- Lembar Kerja Ekspor (Excel / CSV)

------------------------------------------------------

9. Kesimpulan

Reporting adalah ujung tombak akuntabilitas dari aplikasi DevFlow. Manajer proyek maupun klien pemesan tidak hanya melihat "aplikasi sudah jadi", namun dapat melihat data empiris, jam kerja, performa, dan hambatan melalui pelaporan yang komprehensif.

======================================================

1. Judul Flowchart

FC-16 – Client Approval

------------------------------------------------------

2. Tujuan Flowchart

Flowchart pamungkas ini mendokumentasikan serah terima perangkat lunak. Tujuannya adalah mendemostrasikan sistem yang dibangun, mengakomodir revisi akhir, hingga memastikan serah terima dan pembayaran disetujui (sign-off) secara resmi oleh sang klien pemesan.

------------------------------------------------------

3. Aktor yang Terlibat

- Client
- Project Manager
- System

------------------------------------------------------

4. Penjelasan Alur

1. Proses dimulai (Start).
2. Klien diundang melihat aplikasi dan melakukan Client Review.
3. Klien memberikan tanggapan (Feedback).
4. Evaluasi Decision: Apakah memerlukan Revisi?
5. Jika YA (memerlukan revisi), tim melakukan proses Revisi Project.
6. Setelah diperbaiki, masuk tahap Review Ulang oleh klien yang kembali memutar ke decision awal.
7. Jika TIDAK (tidak ada revisi), lanjut evaluasi Decision: Apakah hasil telah Approved?
8. Jika tidak disetujui, kembali diminta melakukan Revisi Project.
9. Jika setuju (Approved), status berubah menjadi Project Closed.
10. Sistem menerbitkan laporan serah terima (Generate Final Report).
11. Flowchart dan proyek resmi selesai (End).

------------------------------------------------------

5. Decision

Decision 1
Revisi?
YES: Mengarahkan tim untuk menyesuaikan kembali spesifikasi sistem (Revisi Project).
NO: Lanjut menanyakan persetujuan akhir.

Decision 2
Approved?
YES: Klien puas, dokumen BAST / Sign-off disetujui, dan Project Closed.
NO: Masih belum sesuai spesifikasi, kembali dipaksa melakukan Revisi Project.

------------------------------------------------------

6. Database yang Digunakan

- Project Database: Update _state_ terakhir menjadi "Closed".
- Report Database: Dokumentasi serah terima final disimpan ke sini.

------------------------------------------------------

7. Input

- Catatan Feedback & Penolakan dari Klien
- Tanda Tangan Digital / Persetujuan

------------------------------------------------------

8. Output

- Final Report / BAST Dokumen
- Penutupan Akses Developer (Lock Project)

------------------------------------------------------

9. Kesimpulan

Proses berulang untuk Client Review ini mendasari filosofi kolaboratif PT MAINTEK JUARA INTISOLUSI. Sistem dirancang terbuka untuk umpan balik sehingga produk akhir perangkat lunak terjamin benar-benar memenuhi _business requirements_ dan memberi kepuasan 100% sebelum ditutup.

======================================================
