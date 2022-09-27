class Conversation {
    constructor(conversationElement) {
        this.conversationElement = conversationElement
    }
    addMessage(message, index) {
        setTimeout(() => {
            this.conversationElement.innerHTML += `
            <div class="message message--${message.side}">
                    <div class="message__text">
                    ${message.text}
                    </div>
                </div>
            `
        }, (index * 500) + 500);
    }
}

export default Conversation