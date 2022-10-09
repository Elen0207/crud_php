Delimiter //
Create procedure PC_Insert_Usuario(IN InsNome VARCHAR(60), InsCelular CHAR(11), InsEmail VARCHAR(60))
Begin
Insert into tbUsuario Values(InsNome, InsCelular, InsEmail);      
end //
Delimiter;

chamada no software: 
String sql = "call PC_Insert_Usuario(?, ?, ?, ?)";
