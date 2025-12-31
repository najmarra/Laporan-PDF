CREATE TABLE mahasiswa (
    nim VARCHAR(10) NOT NULL,
    nama_lengkap VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    no_hp VARCHAR(13) NOT NULL,
    PRIMARY KEY (nim)
);

INSERT INTO mahasiswa (nim, nama_lengkap, tanggal_lahir, no_hp)
VALUES
('231001', 'Najma Lail Arazy', '2008-03-12', '081234567890'),
('231002', 'Shafira Nauraishma Zahida', '2008-07-22', '082345678901'),
('231003', 'Hidayah Nur Septiani', '2008-01-05', '083456789012');
