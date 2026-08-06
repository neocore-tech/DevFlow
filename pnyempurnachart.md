# PEMBAGIAN FLOWCHART

Apabila satu flowchart terlalu panjang atau melebihi satu halaman, pecah flowchart menjadi beberapa bagian yang saling berhubungan.

Setiap bagian harus tetap menjadi satu kesatuan proses dan dihubungkan menggunakan Connector (On-Page Connector) atau Off-Page Connector.

Gunakan penamaan connector secara berurutan:

A → A
B → B
C → C
D → D
E → E
F → F

Jangan memutus alur tanpa connector.

==================================================

CONTOH PEMBAGIAN

FC-01 Master Workflow

Bagian 1

Start
↓
Client Request
↓
Requirement Analysis
↓
Project Approval
↓
Create Project
↓
Connector A

---

Bagian 2

Connector A
↓
Sprint Planning
↓
Assign Team
↓
Assign Developer
↓
Assign Internship
↓
Create Task
↓
Connector B

---

Bagian 3

Connector B
↓
Development
↓
Commit Git
↓
Push Repository
↓
Pull Request
↓
Code Review

◇ Code Review Approve?

Ya
↓
Build Project
↓
Connector C

Tidak
↓
Kembali ke Coding

---

Bagian 4

Connector C
↓
QA Testing

◇ QA Passed?

Ya
↓
Deployment
↓
Monitoring
↓
Client Review

◇ Client Approve?

Ya
↓
Project Closed
↓
Generate Report
↓
End

Tidak
↓
Revision
↓
Kembali ke Development

==================================================

ATURAN

• Maksimal satu bagian berisi 8–12 simbol agar tidak terlalu padat.
• Setiap bagian diberi judul, misalnya:

- FC-01 Bagian 1
- FC-01 Bagian 2
- FC-01 Bagian 3
- FC-01 Bagian 4
  • Setiap bagian dimulai dengan Connector sebelumnya (kecuali Bagian 1 dimulai dengan Start).
  • Setiap bagian diakhiri dengan Connector berikutnya (kecuali bagian terakhir diakhiri dengan End).
  • Connector harus menggunakan huruf berurutan (A, B, C, D, ...).
  • Gunakan simbol Connector standar ANSI/ISO berbentuk lingkaran kecil.
  • Tata letak tetap vertikal (Top to Bottom).
  • Hindari garis yang saling bertabrakan.
  • Pastikan setiap bagian dapat dipahami secara mandiri tetapi tetap terhubung dengan bagian lainnya.
