package main

import (
	"fmt"
	"io"
	"net/http"
	"os"
)

type logWriter struct{}

func main() {
	resp, err := http.Get("https://www.google.com")
	if err != nil {
		fmt.Println("Error:", err)
		os.Exit(1)
	}
	// fmt.Println(resp)
	// preparing the empty byteslice with 9999999 spaces that served for
	// the response data
	// bs := make([]byte, 999999)
	// // assigned the data into the bs variable
	// resp.Body.Read(bs)
	// //print out the data as a string
	// fmt.Println(string(bs))
	lw := logWriter{}
	io.Copy(lw, resp.Body)

}

func (logWriter) Write(bs []byte) (int, error) {
	fmt.Println(string(bs))
	fmt.Println("Just wrote this many bytes:", len(bs))
	return len(bs), nil
}
