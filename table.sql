CREATE TABLE kertas (
k_id CHAR(5) NOT NULL,
k_jenis VARCHAR(20) NOT NULL,
k_harga INT NOT NULL,
k_ukuran VARCHAR(100) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table detil_transaksi
--

CREATE TABLE detil_transaksi (
k_id CHAR(5) NOT NULL,
t_id CHAR(5) NOT NULL,
dt_jumlah INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table pegawai
--

CREATE TABLE pegawai (
pg_id CHAR(5) NOT NULL,
pg_nama VARCHAR(100) NOT NULL,
pg_tgl_lahir DATE NOT NULL,
pg_alamat VARCHAR(100) NOT NULL,
pg_notelp VARCHAR(20) NOT NULL,
pg_bagian VARCHAR(20) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table pemesan
--

CREATE TABLE pemesan (
pm_id CHAR(5) NOT NULL,
pm_nama VARCHAR(100) NOT NULL,
pm_tgl_lahir DATE NOT NULL,
pm_alamat VARCHAR(100) NOT NULL,
pm_notelp VARCHAR(20) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table printer
--

CREATE TABLE printer (
pt_id CHAR(5) NOT NULL,
pt_nama VARCHAR(30) NOT NULL,
pt_status VARCHAR(10) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table status_pengiriman
--

CREATE TABLE status_pengiriman (
sp_id CHAR(5) NOT NULL,
t_id CHAR(5) NOT NULL,
sp_status VARCHAR(20) NOT NULL,
sp_alamat VARCHAR(100) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table transaksi
--

CREATE TABLE transaksi (
t_id CHAR(5) NOT NULL,
sp_id CHAR(5) NOT NULL,
pg_id CHAR(5) NOT NULL,
pm_id CHAR(5) NOT NULL,
pt_id CHAR(5) NOT NULL,
t_tgl_masuk DATE NOT NULL,
t_tgl_jadi DATE NOT NULL,
t_tgl_ambil DATE NOT NULL,
t_total_harga INT NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table kertas
--
ALTER TABLE kertas
ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table detil_transaksi
--
ALTER TABLE detil_transaksi
ADD KEY k_id (`k_id`,`t_id`),
ADD KEY t_id (`t_id`);

--
-- Indexes for table pegawai
--
ALTER TABLE pegawai
ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table pemesan
--
ALTER TABLE pemesan
ADD PRIMARY KEY (`pm_id`);

--
-- Indexes for table printer
--
ALTER TABLE printer
ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table status_pengiriman
--
ALTER TABLE status_pengiriman
ADD KEY t_id (`t_id`);

--
-- Indexes for table transaksi
--
ALTER TABLE transaksi
ADD PRIMARY KEY (`t_id`),
ADD KEY sp_id (`sp_id`),
ADD KEY pg_id (`pg_id`),
ADD KEY pm_id (`pm_id`),
ADD KEY pt_id (`pt_id`);
--
-- Constraints for dumped tables
--

--
-- Constraints for table detil_transaksi
--
ALTER TABLE detil_transaksi
ADD CONSTRAINT detil_transaksi_ibfk_1 FOREIGN KEY (`t_id`) REFERENCES transaksi (`t_id`),
ADD CONSTRAINT detil_transaksi_ibfk_2 FOREIGN KEY (`k_id`) REFERENCES barang (`k_id`);

--
-- Constraints for table status_pengiriman
--
ALTER TABLE status_pengiriman
ADD CONSTRAINT status_pengiriman_ibfk_1 FOREIGN KEY (`t_id`) REFERENCES transaksi (`t_id`);

--
-- Constraints for table transaksi
--
ALTER TABLE transaksi
ADD CONSTRAINT transaksi_ibfk_1 FOREIGN KEY (`pt_id`) REFERENCES printer (`pt_id`),
ADD CONSTRAINT transaksi_ibfk_2 FOREIGN KEY (`pm_id`) REFERENCES pemesan (`pm_id`),
ADD CONSTRAINT transaksi_ibfk_3 FOREIGN KEY (`pg_id`) REFERENCES pegawai (`pg_id`);
