# MVCDemo
Code PhP connect with db using MVC model
----------------------------------------------------------------------------------------------------------------------
MVC là từ viết tắt bởi 3 từ Model – View – Controller. 
Đây là mô hình thiết kế sử dụng trong kỹ thuật phần mềm.
Mô hình source code thành 3 phần, tương ứng mỗi từ. 
Mỗi từ tương ứng với một hoạt động tách biệt trong một mô hình.

<b>Model</b> (M):

Là bộ phận có chức năng lưu trữ toàn bộ dữ liệu của ứng dụng. 
Bộ phận này là một cầu nối giữa 2 thành phần bên dưới là View và Controller. 
Model thể hiện dưới hình thức là một cơ sở dữ liệu hoặc có khi chỉ đơn giản là một file XML bình thường. 
Model thể hiện rõ các thao tác với cơ sở dữ liệu như cho phép xem, truy xuất, xử lý dữ liệu,…

<b>View</b> (V):

Đây là phần giao diện (theme) dành cho người sử dụng.
Nơi mà người dùng có thể lấy được thông tin dữ liệu của MVC thông qua các thao tác truy vấn như tìm kiếm 
hoặc sử dụng thông qua các website.

Thông thường, các ứng dụng web sử dụng MVC View như một phần của  hệ thống, nơi các thành phần HTML được tạo ra.
Bên cạnh đó, View cũng có chức năng ghi nhận hoạt động của  người dùng để tương tác với Controller.
Tuy nhiên, View không có mối quan hệ trực tiếp với Controller, cũng không được lấy dữ liệu từ Controller mà chỉ
hiển thị yêu cầu chuyển cho Controller mà thôi.

Ví dụ: Nút “delete” được tạo bởi View khi người dùng nhấn vào nút đó sẽ có một hành động trong Controller.

<b>Controller</b> (C):

Bộ phận có nhiệm vụ xử lý các yêu cầu người dùng đưa đến thông qua view. 
Từ đó, C đưa ra dữ liệu phù hợp với người dùng. 
Bên cạnh đó, Controller còn có chức năng kết nối với model.
