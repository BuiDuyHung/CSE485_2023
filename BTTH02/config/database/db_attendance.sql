-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2023 lúc 08:45 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_diemdanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(11) NOT NULL,
  `days` date DEFAULT NULL,
  `lecturer_id` int(11) DEFAULT NULL,
  `id_courseClass` int(11) DEFAULT NULL,
  `time_begin` time NOT NULL,
  `time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `attendance`
--

INSERT INTO `attendance` (`ID`, `days`, `lecturer_id`, `id_courseClass`, `time_begin`, `time_end`) VALUES
(1, '2023-05-20', 1, 1, '13:00:00', '13:05:00'),
(2, '2023-05-20', 1, 1, '23:07:00', '23:30:00'),
(12, '2023-05-21', 1, 1, '01:43:00', '01:43:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attendancerecords`
--

CREATE TABLE `attendancerecords` (
  `id` int(11) NOT NULL,
  `attendance_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `attendancerecords`
--

INSERT INTO `attendancerecords` (`id`, `attendance_id`, `student_id`, `status`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(7, 12, 1, NULL),
(8, 12, 2, NULL),
(9, 12, 3, NULL),
(10, 12, 4, NULL),
(11, 12, 5, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classdetail`
--

CREATE TABLE `classdetail` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `classdetail`
--

INSERT INTO `classdetail` (`id`, `class_id`, `student_id`) VALUES
(1, 1, 1),
(4, 1, 2),
(5, 1, 3),
(6, 1, 4),
(7, 1, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courseclass`
--

CREATE TABLE `courseclass` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `time_begin` date DEFAULT NULL,
  `time_end` date DEFAULT NULL,
  `lecturer_id` int(11) DEFAULT NULL,
  `id_course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `courseclass`
--

INSERT INTO `courseclass` (`ID`, `name`, `time_begin`, `time_end`, `lecturer_id`, `id_course`) VALUES
(1, 'Công nghệ Web-2-22(62TH2)', '2023-04-17', '2023-06-18', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `ID` int(11) NOT NULL,
  `courseID` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`ID`, `courseID`, `title`, `content`) VALUES
(1, 'CSE485', 'Công Nghệ Web', 'Môn học này cung cấp cho sinh viên các kiến thức cơ sở nhất trong việc xây dựng một website.'),
(2, 'CSE480', 'Phân tích và thiết kế hệ thống thông tin', 'Môn học này giúp sinh viên hiểu và áp dụng các phương pháp, kỹ thuật và công cụ để phân tích, thiết kế và triển khai các hệ thống thông tin.'),
(3, 'CSE281', 'Cấu trúc dữ liệu và giải thuật', 'Môn học Cấu trúc dữ liệu và giải thuật tập trung vào việc nắm vững các khái niệm, kỹ thuật và công cụ để hiểu, thiết kế và triển khai cấu trúc dữ liệu và giải thuật trong lập trình.\r\n\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lecturers`
--

CREATE TABLE `lecturers` (
  `ID` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lecturers`
--

INSERT INTO `lecturers` (`ID`, `fullName`, `email`, `phoneNumber`, `address`, `level`) VALUES
(1, 'Kiều Tuấn Dũng', 'dungkt@gmail.com', '0985532328', 'Hà Nội', 'Tiến Sĩ'),
(2, 'Nguyễn Văn Nam', 'namvn@gmail.com', '0986652368', 'Thái Bình', 'Tiến Sĩ'),
(3, 'Dương Thị Thu Trang', 'trangttd@gmail.com', '0985235226', 'Thái Nguyên', 'Tiến Sĩ'),
(4, 'Phạm Thị Anh', 'anhtp@gmail.com', '0952258623', 'Hòa Bình', 'Tiến Sĩ'),
(5, 'Lý Thành Công', 'congtl@gmail.com', '0986236358', 'Nghệ An', 'Tiến Sĩ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level`
--

CREATE TABLE `level` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `level`
--

INSERT INTO `level` (`ID`, `name`, `create_at`, `update_at`) VALUES
(1, 'Admin', '2023-05-18', '2023-05-18'),
(2, 'user', '2023-05-18', '2023-05-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `stage` varchar(50) NOT NULL,
  `schoolYear` varchar(50) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `register`
--

INSERT INTO `register` (`ID`, `semester`, `stage`, `schoolYear`, `student_id`, `course_id`) VALUES
(1, 'Học kỳ II', 'Giai đoạn 2', '2022-2023', 1, 1),
(2, 'Học kỳ II', 'Giai đoạn 2', '2022-2023', 2, 1),
(3, 'Học kỳ II', 'Giai đoạn 2', '2022-2023', 3, 1),
(4, 'Học kỳ II', 'Giai đoạn 2', '2022-2023', 4, 1),
(5, 'Học kỳ II', 'Giai đoạn 2', '2022-2023', 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`ID`, `fullName`, `gender`, `birthday`, `email`, `phoneNumber`, `address`) VALUES
(1, 'Lê Văn Quân', 'Nam', '2002-05-02', 'quanlv@gmail.com', '0962358866', 'Hà Nội'),
(2, 'Nguyễn Văn Thành', 'Nam', '2002-07-06', 'thanhnv@gmail.com', '0961258966', 'Vĩnh Phúc'),
(3, 'Nguyễn Thị Oanh', 'Nữ', '2002-04-03', 'oanhtn@gmail.com', '09856625358', 'Hải Dương'),
(4, 'Lý Văn Trường ', 'Nam', '2002-03-16', 'truonglv@gmail.com', '0986258666', 'Quảng Ninh'),
(5, 'Lê Văn Thắng', 'Nam', '2002-08-08', 'thanglv@gmail.com', '0966259358', 'Cao Bằng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `password`, `phone`, `address`, `create_at`, `update_at`, `id_level`) VALUES
(1, 'dungkt', 'dungkt@gmail.com', '123456', '0985532356', 'Hà Nội', '2023-05-19', '2023-05-19', 1),
(2, 'quanlv', 'quanlv@gmail.com', '123456', '0985562258', 'Hà Nội', '2023-05-19', '2023-05-19', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_GV` (`lecturer_id`),
  ADD KEY `id_courseClass` (`id_courseClass`);

--
-- Chỉ mục cho bảng `attendancerecords`
--
ALTER TABLE `attendancerecords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_id` (`attendance_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Chỉ mục cho bảng `classdetail`
--
ALTER TABLE `classdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Chỉ mục cho bảng `courseclass`
--
ALTER TABLE `courseclass`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_GV` (`lecturer_id`),
  ADD KEY `id_course` (`id_course`);

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_SV` (`student_id`),
  ADD KEY `id_course` (`course_id`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `attendancerecords`
--
ALTER TABLE `attendancerecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `classdetail`
--
ALTER TABLE `classdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `courseclass`
--
ALTER TABLE `courseclass`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `level`
--
ALTER TABLE `level`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`ID`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`id_courseClass`) REFERENCES `courseclass` (`ID`);

--
-- Các ràng buộc cho bảng `attendancerecords`
--
ALTER TABLE `attendancerecords`
  ADD CONSTRAINT `attendancerecords_ibfk_1` FOREIGN KEY (`attendance_id`) REFERENCES `attendance` (`ID`),
  ADD CONSTRAINT `attendancerecords_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`ID`);

--
-- Các ràng buộc cho bảng `classdetail`
--
ALTER TABLE `classdetail`
  ADD CONSTRAINT `classdetail_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `courseclass` (`ID`),
  ADD CONSTRAINT `classdetail_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`ID`);

--
-- Các ràng buộc cho bảng `courseclass`
--
ALTER TABLE `courseclass`
  ADD CONSTRAINT `courseclass_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`ID`),
  ADD CONSTRAINT `courseclass_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `courses` (`ID`);

--
-- Các ràng buộc cho bảng `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`ID`),
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`ID`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
