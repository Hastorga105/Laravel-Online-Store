function dropdown(){
    return{
        open:false,
        show(){
            if(this.open){//si open es falso
                this.open = false
                document.getElementByTagName('html')[0].style.overflow = "auto"
            }else{
                this.open = true
                document.getElementByTagName('html')[0].style.overflow = "hidden"

            }
        },close(){
        this.open = false
        document.getElementByTagName('html')[0].style.overflow = "auto"
        }
    }
}
