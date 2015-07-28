@echo off 
color 0b
echo.
echo.
echo 在程序没有结束的信息时，请勿关闭本窗口！
echo.
echo 正在清除系统垃圾文件，请稍后...... 
echo.
echo **********************************
echo.
echo 第 一
echo 删除临时文件
echo.
echo **********************************
echo.
del /f /s /q %systemdrive%\*.tmp 
del /f /s /q %systemdrive%\*._mp 
rd /s /q %windir%\temp & md %windir%\temp
del /f /s /q "%userprofile%\local settings\temp\*.*" 
del /f /s /q %windir%\prefetch\*.* 
echo.
echo **********************************
echo.
echo 第 二
echo 删除日志文件
echo 删除帮助索引文件
echo 删除磁盘扫描留下的临时文件
echo 删除备份文件
echo 删除旧备份文件
echo.
echo **********************************
echo.
del /f /s /q %systemdrive%\*.log
del /f /s /q %systemdrive%\*.gid 
del /f /s /q %systemdrive%\*.chk 
del /f /s /q %windir%\*.bak 
del /f /s /q %systemdrive%\*.old 
echo.
echo **********************************
echo.
echo 第 三
echo 清空回收站
echo.
echo **********************************
echo.
del /f /s /q c:\$recycle.bin\*.*
del /f /s /q d:\$recycle.bin\*.*
del /f /s /q e:\$recycle.bin\*.*
del /f /s /q f:\$recycle.bin\*.*
del /f /s /q g:\$recycle.bin\*.*
echo.
echo **********************************
echo.
echo 第 四
echo 删除自动更新后留下的软件
echo.
echo **********************************
echo.
rd /s /q %windir%\SoftwareDistribution\Download & md %windir%\SoftwareDistribution\Download
echo.
echo **********************************
echo.
echo 第 五
echo 删除上网产生的Cookies
echo.
echo **********************************
echo.
del /f /q "%userprofile%\AppData\Roaming\Microsoft\Windows\Cookies\*.*"
echo.
echo **********************************
echo.
echo 第 六
echo 删除上网产生的临时文件
echo.
echo **********************************
echo.
del /f /s /q "%userprofile%\AppData\Local\Microsoft\Windows\Temporary Internet Files\*.*"
echo.
echo **********************************
echo.
echo 第 七
echo 运行私隐保护
echo.
echo **********************************
echo.
del /f /s /q "%userprofile%\AppData\Roaming\Microsoft\Windows\Recent\*.*" 