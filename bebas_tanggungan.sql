USE [master]
GO
/****** Object:  Database [bebas_tanggungan]    Script Date: 07/12/2024 11:14:42 ******/
CREATE DATABASE [bebas_tanggungan]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'bebas_tanggungan', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.SQLEXPRESS\MSSQL\DATA\bebas_tanggungan.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
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
/****** Object:  Table [dbo].[admin]    Script Date: 07/12/2024 11:14:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[admin](
	[id_admin] [char](6) NOT NULL,
	[nama] [varchar](50) NOT NULL,
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
/****** Object:  Table [dbo].[berkas]    Script Date: 07/12/2024 11:14:42 ******/
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
/****** Object:  Table [dbo].[mahasiswa]    Script Date: 07/12/2024 11:14:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[mahasiswa](
	[id_mahasiswa] [char](10) NOT NULL,
	[nim] [char](10) NOT NULL,
	[nama] [varchar](50) NOT NULL,
	[prodi] [varchar](20) NOT NULL,
	[password] [varchar](15) NOT NULL,
	[angkatan] [int] NOT NULL,
 CONSTRAINT [PK__mahasisw__C7DEC338CD5B3378] PRIMARY KEY CLUSTERED 
(
	[id_mahasiswa] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[notifikasi]    Script Date: 07/12/2024 11:14:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[notifikasi](
	[id_notifikasi] [int] IDENTITY(1,1) NOT NULL,
	[nama] [varchar](20) NOT NULL,
	[isi] [text] NOT NULL,
	[waktu] [datetime] NOT NULL,
	[id_admin] [char](6) NOT NULL,
	[id_mahasiswa] [char](10) NOT NULL,
 CONSTRAINT [PK_notifikasi] PRIMARY KEY CLUSTERED 
(
	[id_notifikasi] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[status_tanggungan]    Script Date: 07/12/2024 11:14:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[status_tanggungan](
	[id_status] [int] IDENTITY(1,1) NOT NULL,
	[id_mahasiswa] [char](10) NOT NULL,
	[id_unggah] [int] NOT NULL,
	[id_admin] [char](6) NOT NULL,
	[status] [varchar](15) NOT NULL,
	[tanggal_pengecekan] [date] NOT NULL,
	[status_pengajuan] [varchar](15) NOT NULL,
	[catatan_admin] [varchar](100) NULL,
 CONSTRAINT [PK_status_tanggungan] PRIMARY KEY CLUSTERED 
(
	[id_status] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[unggah_berkas]    Script Date: 07/12/2024 11:14:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[unggah_berkas](
	[id_unggah] [int] IDENTITY(1,1) NOT NULL,
	[id_mahasiswa] [char](10) NOT NULL,
	[id_berkas] [int] NOT NULL,
	[lokasi_file] [varbinary](max) NULL,
 CONSTRAINT [PK_unggah_tanggungan] PRIMARY KEY CLUSTERED 
(
	[id_unggah] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [IX_mahasiswa]    Script Date: 07/12/2024 11:14:42 ******/
CREATE NONCLUSTERED INDEX [IX_mahasiswa] ON [dbo].[mahasiswa]
(
	[id_mahasiswa] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [IX_status_tanggungan]    Script Date: 07/12/2024 11:14:42 ******/
CREATE NONCLUSTERED INDEX [IX_status_tanggungan] ON [dbo].[status_tanggungan]
(
	[id_status] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [IX_status_tanggungan_1]    Script Date: 07/12/2024 11:14:42 ******/
CREATE NONCLUSTERED INDEX [IX_status_tanggungan_1] ON [dbo].[status_tanggungan]
(
	[id_status] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [IX_status_tanggungan_2]    Script Date: 07/12/2024 11:14:42 ******/
CREATE NONCLUSTERED INDEX [IX_status_tanggungan_2] ON [dbo].[status_tanggungan]
(
	[id_status] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
ALTER TABLE [dbo].[mahasiswa] ADD  CONSTRAINT [DF__mahasiswa__angka__1D7B6025]  DEFAULT ((2024)) FOR [angkatan]
GO
ALTER TABLE [dbo].[notifikasi]  WITH CHECK ADD  CONSTRAINT [FK_notifikasi_mahasiswa] FOREIGN KEY([id_mahasiswa])
REFERENCES [dbo].[mahasiswa] ([id_mahasiswa])
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
ALTER TABLE [dbo].[status_tanggungan]  WITH CHECK ADD  CONSTRAINT [FK_status_tanggungan_mahasiswa] FOREIGN KEY([id_mahasiswa])
REFERENCES [dbo].[mahasiswa] ([id_mahasiswa])
GO
ALTER TABLE [dbo].[status_tanggungan] CHECK CONSTRAINT [FK_status_tanggungan_mahasiswa]
GO
ALTER TABLE [dbo].[status_tanggungan]  WITH CHECK ADD  CONSTRAINT [FK_status_tanggungan_unggah_berkas] FOREIGN KEY([id_unggah])
REFERENCES [dbo].[unggah_berkas] ([id_unggah])
GO
ALTER TABLE [dbo].[status_tanggungan] CHECK CONSTRAINT [FK_status_tanggungan_unggah_berkas]
GO
ALTER TABLE [dbo].[unggah_berkas]  WITH CHECK ADD  CONSTRAINT [FK_unggah_berkas_berkas] FOREIGN KEY([id_berkas])
REFERENCES [dbo].[berkas] ([id_berkas])
GO
ALTER TABLE [dbo].[unggah_berkas] CHECK CONSTRAINT [FK_unggah_berkas_berkas]
GO
ALTER TABLE [dbo].[unggah_berkas]  WITH CHECK ADD  CONSTRAINT [FK_unggah_berkas_mahasiswa] FOREIGN KEY([id_mahasiswa])
REFERENCES [dbo].[mahasiswa] ([id_mahasiswa])
GO
ALTER TABLE [dbo].[unggah_berkas] CHECK CONSTRAINT [FK_unggah_berkas_mahasiswa]
GO
/****** Object:  StoredProcedure [dbo].[dashboardTanggungan]    Script Date: 07/12/2024 11:14:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[dashboardTanggungan] 
 @id_status int,
 @id_mahasiswa char(10),
 @id_unggah int,
 @id_admin char(6),
 @status varchar(15),
 @tanggal_pengecekan date,
 @status_pengajuan varchar(15),
 @catatan_admin varchar(100)
 AS
 BEGIN
 SELECT * FROM status_tanggungan;
 END
GO
/****** Object:  StoredProcedure [dbo].[loginAdmin]    Script Date: 07/12/2024 11:14:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[loginAdmin] 
@id_admin char(6),
@username varchar(15),
@password varchar(15)
AS
BEGIN 
SELECT * FROM admin WHERE id_admin = @id_admin AND username = @username AND password = @password;
END
GO
/****** Object:  StoredProcedure [dbo].[loginMahasiswa]    Script Date: 07/12/2024 11:14:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
	CREATE PROCEDURE [dbo].[loginMahasiswa]
		@nim char(10),
		@password varchar(15)
	AS
	BEGIN 
		SELECT * FROM mahasiswa WHERE nim = @nim AND password = @password;
	END
GO
/****** Object:  StoredProcedure [dbo].[unggahForm]    Script Date: 07/12/2024 11:14:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[unggahForm] 
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
