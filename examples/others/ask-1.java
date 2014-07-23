class Clerk {
    Store store;
    void SellGoodsTo(Client client) {
        money = client.GetWallet().GetMoney();
        store.ReceiveMoney(money);
    }
};
