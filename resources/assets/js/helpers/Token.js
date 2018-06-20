class Token {

  payload(token) {
    const payload = token.split('.')[1];
    return this.decode(payload);
  }

  decode(payload) {
    return JSON.parse(atob(payload));
  }

  isValid(token) {
    const payload = this.payload(token);

    if (payload) {
      return payload.iss == "http://realtimeapp.test/api/auth/login" || "http://realtimeapp.test/api/auth/signup" ? true : false
    }

    return false;
  }

}

export default Token = new Token();