@echo off 
color 0b
echo.
echo.
echo �ڳ���û�н�������Ϣʱ������رձ����ڣ�
echo.
echo �������ϵͳ�����ļ������Ժ�...... 
echo.
echo **********************************
echo.
echo �� һ
echo ɾ����ʱ�ļ�
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
echo �� ��
echo ɾ����־�ļ�
echo ɾ�����������ļ�
echo ɾ������ɨ�����µ���ʱ�ļ�
echo ɾ�������ļ�
echo ɾ���ɱ����ļ�
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
echo �� ��
echo ��ջ���վ
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
echo �� ��
echo ɾ���Զ����º����µ����
echo.
echo **********************************
echo.
rd /s /q %windir%\SoftwareDistribution\Download & md %windir%\SoftwareDistribution\Download
echo.
echo **********************************
echo.
echo �� ��
echo ɾ������������Cookies
echo.
echo **********************************
echo.
del /f /q "%userprofile%\AppData\Roaming\Microsoft\Windows\Cookies\*.*"
echo.
echo **********************************
echo.
echo �� ��
echo ɾ��������������ʱ�ļ�
echo.
echo **********************************
echo.
del /f /s /q "%userprofile%\AppData\Local\Microsoft\Windows\Temporary Internet Files\*.*"
echo.
echo **********************************
echo.
echo �� ��
echo ����˽������
echo.
echo **********************************
echo.
del /f /s /q "%userprofile%\AppData\Roaming\Microsoft\Windows\Recent\*.*" 