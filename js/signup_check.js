function sendIt(){
    var mbid = document.f.mbid.value;
    //아이디 입력여부 검사
    if (mbid == "") {
        alert("아이디를 입력하지 않았습니다.");
        f.mbid.focus();
        return false;
    }
    //비밀번호 입력여부 체크
    if (document.f.mbpw.value == "") {
        alert("비밀번호를 입력하지 않았습니다.");
        document.f.mbpw.focus();
        return false;
    }
    if (f.mbid.value == f.mbpw.value) {
        alert("아이디와 비밀번호가 같습니다.");
        document.f.mbpw.focus();
        return false;
    }
    //비밀번호 길이 체크(4~8자 까지 허용)
    if (document.f.mbpw.value.length<4 || document.f.mbpw.value.length>12) {
        alert("비밀번호를 4~12자까지 입력해주세요.");
        document.f.mbpw.focus();
        document.f.mbpw.select();
        return false;
    }

    //비밀번호와 비밀번호 확인 일치여부 체크
    if (document.f.mbpw.value != document.f.mbpw_re.value) {
        alert("비밀번호가 일치하지 않습니다");
        document.f.mbpw.value = "";
        document.f.mbpw_re.value = "";
        return false;
    }
    // 핸드폰번호 비어있는지
    if (document.f.mbphone.value == "") {
        alert("핸드폰 번호를 입력하지 않았습니다.");
        document.f.mbphone.focus();
        return false;
    }
    document.f.submit();
}
