USE [master]
GO
/****** Object:  Database [bebas_tanggungan]    Script Date: 08/12/2024 15:06:17 ******/
CREATE DATABASE [bebas_tanggungan]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'bebas_tanggungan', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.SQLEXPRESS\MSSQL\DATA\bebas_tanggungan.mdf' , SIZE = 73728KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'bebas_tanggungan_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.SQLEXPRESS\MSSQL\DATA\bebas_tanggungan_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT, LEDGER = OFF
GO
ALTER DATABASE [bebas_tanggungan] SET COMPATIBILITY_LEVEL = 160
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [bebas_tanggungan].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [bebas_tanggungan] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET ARITHABORT OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET AUTO_CLOSE ON 
GO
ALTER DATABASE [bebas_tanggungan] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [bebas_tanggungan] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [bebas_tanggungan] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET  ENABLE_BROKER 
GO
ALTER DATABASE [bebas_tanggungan] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [bebas_tanggungan] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [bebas_tanggungan] SET  MULTI_USER 
GO
ALTER DATABASE [bebas_tanggungan] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [bebas_tanggungan] SET DB_CHAINING OFF 
GO
ALTER DATABASE [bebas_tanggungan] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [bebas_tanggungan] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [bebas_tanggungan] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [bebas_tanggungan] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
ALTER DATABASE [bebas_tanggungan] SET QUERY_STORE = ON
GO
ALTER DATABASE [bebas_tanggungan] SET QUERY_STORE (OPERATION_MODE = READ_WRITE, CLEANUP_POLICY = (STALE_QUERY_THRESHOLD_DAYS = 30), DATA_FLUSH_INTERVAL_SECONDS = 900, INTERVAL_LENGTH_MINUTES = 60, MAX_STORAGE_SIZE_MB = 1000, QUERY_CAPTURE_MODE = AUTO, SIZE_BASED_CLEANUP_MODE = AUTO, MAX_PLANS_PER_QUERY = 200, WAIT_STATS_CAPTURE_MODE = ON)
GO
USE [bebas_tanggungan]
GO
/****** Object:  Table [dbo].[admin]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[admin](
	[id_admin] [char](6) NOT NULL,
	[nama_admin] [varchar](50) NOT NULL,
	[username] [varchar](15) NOT NULL,
	[password] [varchar](15) NOT NULL,
	[no_telp] [varchar](20) NOT NULL,
	[role] [varchar](20) NOT NULL,
 CONSTRAINT [PK_admin] PRIMARY KEY CLUSTERED 
(
	[id_admin] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[berkas]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[berkas](
	[id_berkas] [int] IDENTITY(1,1) NOT NULL,
	[nama_berkas] [varchar](50) NOT NULL,
 CONSTRAINT [PK_berkas] PRIMARY KEY CLUSTERED 
(
	[id_berkas] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[konten]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[konten](
	[id_konten] [int] IDENTITY(1,1) NOT NULL,
	[nama_konten] [varchar](50) NOT NULL,
 CONSTRAINT [PK_konten] PRIMARY KEY CLUSTERED 
(
	[id_konten] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[mahasiswa]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[mahasiswa](
	[nim] [char](10) NOT NULL,
	[nama_mahasiswa] [varchar](50) NOT NULL,
	[prodi] [varchar](20) NOT NULL,
	[password] [varchar](15) NOT NULL,
	[angkatan] [int] NOT NULL,
 CONSTRAINT [PK_mahasiswa] PRIMARY KEY CLUSTERED 
(
	[nim] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[notifikasi]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[notifikasi](
	[id_notifikasi] [int] IDENTITY(1,1) NOT NULL,
	[nama_notifikasi] [varchar](20) NOT NULL,
	[isi] [text] NOT NULL,
	[waktu] [datetime] NOT NULL,
	[id_admin] [char](6) NOT NULL,
	[nim] [char](10) NOT NULL,
 CONSTRAINT [PK_notifikasi] PRIMARY KEY CLUSTERED 
(
	[id_notifikasi] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[status_tanggungan]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[status_tanggungan](
	[id_status] [int] IDENTITY(1,1) NOT NULL,
	[nim] [char](10) NOT NULL,
	[id_unggah] [int] NOT NULL,
	[id_admin] [char](6) NOT NULL,
	[status] [varchar](15) NOT NULL,
	[tanggal_pengecekan] [date] NOT NULL,
	[catatan_admin] [varchar](100) NULL,
 CONSTRAINT [PK_status_tanggungan] PRIMARY KEY CLUSTERED 
(
	[id_status] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[susunan_konten]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[susunan_konten](
	[id_susunan_konten] [int] IDENTITY(1,1) NOT NULL,
	[id_konten] [int] NOT NULL,
	[id_admin] [char](6) NOT NULL,
	[isi_konten] [varchar](100) NULL,
 CONSTRAINT [PK_susunan_konten] PRIMARY KEY CLUSTERED 
(
	[id_susunan_konten] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[unggah_berkas]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[unggah_berkas](
	[id_unggah] [int] IDENTITY(1,1) NOT NULL,
	[nim] [char](10) NOT NULL,
	[id_berkas] [int] NOT NULL,
	[nama_file] [varchar](100) NOT NULL,
 CONSTRAINT [PK_unggah_tanggungan] PRIMARY KEY CLUSTERED 
(
	[id_unggah] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Index [IX_status_tanggungan]    Script Date: 08/12/2024 15:06:18 ******/
CREATE NONCLUSTERED INDEX [IX_status_tanggungan] ON [dbo].[status_tanggungan]
(
	[id_status] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [IX_status_tanggungan_1]    Script Date: 08/12/2024 15:06:18 ******/
CREATE NONCLUSTERED INDEX [IX_status_tanggungan_1] ON [dbo].[status_tanggungan]
(
	[id_status] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [IX_status_tanggungan_2]    Script Date: 08/12/2024 15:06:18 ******/
CREATE NONCLUSTERED INDEX [IX_status_tanggungan_2] ON [dbo].[status_tanggungan]
(
	[id_status] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
ALTER TABLE [dbo].[mahasiswa] ADD  CONSTRAINT [DF__mahasiswa__angka__1D7B6025]  DEFAULT ((2024)) FOR [angkatan]
GO
ALTER TABLE [dbo].[notifikasi]  WITH CHECK ADD  CONSTRAINT [FK_notifikasi_mahasiswa] FOREIGN KEY([nim])
REFERENCES [dbo].[mahasiswa] ([nim])
GO
ALTER TABLE [dbo].[notifikasi] CHECK CONSTRAINT [FK_notifikasi_mahasiswa]
GO
ALTER TABLE [dbo].[notifikasi]  WITH CHECK ADD  CONSTRAINT [FK_notifikasi_notifikasi] FOREIGN KEY([id_admin])
REFERENCES [dbo].[admin] ([id_admin])
GO
ALTER TABLE [dbo].[notifikasi] CHECK CONSTRAINT [FK_notifikasi_notifikasi]
GO
ALTER TABLE [dbo].[status_tanggungan]  WITH CHECK ADD  CONSTRAINT [FK_status_tanggungan_admin] FOREIGN KEY([id_admin])
REFERENCES [dbo].[admin] ([id_admin])
GO
ALTER TABLE [dbo].[status_tanggungan] CHECK CONSTRAINT [FK_status_tanggungan_admin]
GO
ALTER TABLE [dbo].[status_tanggungan]  WITH CHECK ADD  CONSTRAINT [FK_status_tanggungan_mahasiswa] FOREIGN KEY([nim])
REFERENCES [dbo].[mahasiswa] ([nim])
GO
ALTER TABLE [dbo].[status_tanggungan] CHECK CONSTRAINT [FK_status_tanggungan_mahasiswa]
GO
ALTER TABLE [dbo].[status_tanggungan]  WITH CHECK ADD  CONSTRAINT [FK_status_tanggungan_unggah_berkas] FOREIGN KEY([id_unggah])
REFERENCES [dbo].[unggah_berkas] ([id_unggah])
GO
ALTER TABLE [dbo].[status_tanggungan] CHECK CONSTRAINT [FK_status_tanggungan_unggah_berkas]
GO
ALTER TABLE [dbo].[susunan_konten]  WITH CHECK ADD  CONSTRAINT [FK_susunan_konten_admin] FOREIGN KEY([id_admin])
REFERENCES [dbo].[admin] ([id_admin])
GO
ALTER TABLE [dbo].[susunan_konten] CHECK CONSTRAINT [FK_susunan_konten_admin]
GO
ALTER TABLE [dbo].[susunan_konten]  WITH CHECK ADD  CONSTRAINT [FK_susunan_konten_konten] FOREIGN KEY([id_konten])
REFERENCES [dbo].[konten] ([id_konten])
GO
ALTER TABLE [dbo].[susunan_konten] CHECK CONSTRAINT [FK_susunan_konten_konten]
GO
ALTER TABLE [dbo].[unggah_berkas]  WITH CHECK ADD  CONSTRAINT [FK_unggah_berkas_berkas] FOREIGN KEY([nim])
REFERENCES [dbo].[mahasiswa] ([nim])
GO
ALTER TABLE [dbo].[unggah_berkas] CHECK CONSTRAINT [FK_unggah_berkas_berkas]
GO
ALTER TABLE [dbo].[unggah_berkas]  WITH CHECK ADD  CONSTRAINT [FK_unggah_berkas_berkas1] FOREIGN KEY([id_berkas])
REFERENCES [dbo].[berkas] ([id_berkas])
GO
ALTER TABLE [dbo].[unggah_berkas] CHECK CONSTRAINT [FK_unggah_berkas_berkas1]
GO
/****** Object:  StoredProcedure [dbo].[sp_edit_admin]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_edit_admin]
	@id_admin char(6),
	@nama_admin  varchar(50),
	@username varchar(15),
	@password varchar(15),
	@no_telp varchar(20),
	@role varchar(20)
AS
BEGIN 
	UPDATE admin SET
	nama_admin = @nama_admin,
	username = @username,
	password = @password,
	no_telp = @no_telp,
	role = @role
WHERE id_admin = @id_admin
END
GO
/****** Object:  StoredProcedure [dbo].[sp_edit_mahasiswa]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_edit_mahasiswa] 
   @nim char(10)
AS 
BEGIN 
  DELETE FROM mahasiswa WHERE nim = @nim;
END
GO
/****** Object:  StoredProcedure [dbo].[sp_hapus_admin]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_hapus_admin]
	@id_admin char(6)
AS
BEGIN 
	DELETE FROM admin WHERE id_admin = @id_admin
END
GO
/****** Object:  StoredProcedure [dbo].[sp_hapus_mahasiswa]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_hapus_mahasiswa] 
   @nim char(10)
AS 
BEGIN 
  DELETE FROM mahasiswa WHERE nim = @nim;
END
GO
/****** Object:  StoredProcedure [dbo].[sp_hitung_tanggungan_belum_selesai]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_hitung_tanggungan_belum_selesai]
AS
BEGIN 
	SELECT COUNT(*) AS belum_selesai FROM status_tanggungan WHERE status IN ('Tidak Disetujui', 'Menunggu Verifikasi');
END
GO
/****** Object:  StoredProcedure [dbo].[sp_hitung_tanggungan_selesai]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_hitung_tanggungan_selesai]
AS
BEGIN 
	SELECT COUNT(*) AS selesai FROM status_tanggungan WHERE status IN ('Selesai');
END
GO
/****** Object:  StoredProcedure [dbo].[sp_hitung_total_tanggungan]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_hitung_total_tanggungan]
AS
BEGIN 
	SELECT COUNT(*) AS total_tanggungan FROM status_tanggungan 
END
GO
/****** Object:  StoredProcedure [dbo].[sp_login_admin]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_login_admin] 
@id_admin char(6),
@username varchar(15),
@password varchar(15)
AS
BEGIN 
SELECT * FROM admin WHERE id_admin = @id_admin AND username = @username AND password = @password;
END
GO
/****** Object:  StoredProcedure [dbo].[sp_login_mahasiswa]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
	CREATE PROCEDURE [dbo].[sp_login_mahasiswa]
		@nim char(10),
		@password varchar(15)
	AS
	BEGIN 
		SELECT * FROM mahasiswa WHERE nim = @nim AND password = @password;
	END
GO
/****** Object:  StoredProcedure [dbo].[sp_tambah_admin]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_tambah_admin]
	@id_admin char(6),
	@nama_admin  varchar(50),
	@username varchar(15),
	@password varchar(15),
	@no_telp varchar(20),
	@role varchar(20)
AS
BEGIN 
	INSERT INTO admin (id_admin, nama_admin, username, password, no_telp, role) VALUES 
	 (@id_admin, @nama_admin, @username, @password, @no_telp, @role)
END
GO
/****** Object:  StoredProcedure [dbo].[sp_tambah_mahasiswa]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_tambah_mahasiswa]
	@nim char(10),
	@nama_mahasiswa varchar(50),
	@prodi varchar(20),
	@password varchar(15),
	@angkatan int
	AS
BEGIN 
	INSERT INTO mahasiswa (nim, nama_mahasiswa, prodi, password, angkatan) VALUES 
	(@nim, @nama_mahasiswa, @prodi, @password, @angkatan);
END
GO
/****** Object:  StoredProcedure [dbo].[sp_tampilkan_mahasiswa_PPLS]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_tampilkan_mahasiswa_PPLS]
	@nim char(10),
	@nama_mahasiswa  varchar(50),
	@prodi varchar(20),
	@password varchar(15),
	@angkatan int
AS
BEGIN 
	SELECT nim, nama_mahasiswa, prodi, angkatan  FROM mahasiswa WHERE prodi = 'Pengembangan Perangkat Lunak Situs';
END
GO
/****** Object:  StoredProcedure [dbo].[sp_tampilkan_mahasiswa_SIB]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_tampilkan_mahasiswa_SIB]
	@nim char(10),
	@nama_mahasiswa varchar(50),
	@prodi varchar(20),
	@password varchar(15),
	@angkatan int
AS
BEGIN 
	SELECT nim, nama_mahasiswa, prodi, angkatan  FROM mahasiswa WHERE prodi = 'Sistem Informasi Bisnis';
END
GO
/****** Object:  StoredProcedure [dbo].[sp_tampilkan_mahasiswa_TI]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_tampilkan_mahasiswa_TI]
	@nim char(10),
	@nama_mahasiswa varchar(50),
	@prodi varchar(20),
	@password varchar(15),
	@angkatan int
AS
BEGIN 
	SELECT nim, nama_mahasiswa, prodi, angkatan  FROM mahasiswa WHERE prodi = 'Teknik Informatika';
END
GO
/****** Object:  StoredProcedure [dbo].[sp_tampilkan_notifikasi]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_tampilkan_notifikasi]
   @id_notifikasi int,
   @nama_notifikasi varchar(20),
   @isi text,
   @waktu datetime,
   @id_admin char(6),
   @nim char(10)
 AS
 BEGIN
   SELECT * FROM notifikasi;
END
GO
/****** Object:  StoredProcedure [dbo].[sp_unggah_form]    Script Date: 08/12/2024 15:06:18 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_unggah_form] 
  @laporan varbinary(MAX),
  @file_tugas varbinary(MAX),
  @surat_publikasi varbinary(MAX),
  @tanda_terima_LA varbinary(MAX),
  @tanda_terima_PKL varbinary(MAX),
  @scan_toeic varbinary(MAX),
  @id_mahasiswa char(10)
  AS
  BEGIN
  INSERT INTO unggah_berkas (laporan, file_tugas, surat_publikasi,
  tanda_terima_LA, tanda_terima_PKL, scan_toeic, id_mahasiswa)
  VALUES (
  @laporan,
  @file_tugas,
  @surat_publikasi,
  @tanda_terima_LA, 
  @tanda_terima_PKL,
  @scan_toeic,
  @id_mahasiswa
  );
  END
GO
USE [master]
GO
ALTER DATABASE [bebas_tanggungan] SET  READ_WRITE 
GO
